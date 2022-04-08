<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Business_frames extends Admin_controller  {

    public function __construct()
	{
		parent::__construct();
		$this->path = $this->config->item('business');
	}

	private $table = 'business_frames';
	protected $redirect = 'business_frames';
	protected $title = 'Business frame';
	protected $name = 'business_frames';
	
	public function index()
	{
        check_access($this->name, 'view');

		$data['title'] = $this->title;
        $data['name'] = $this->name;
        $data['url'] = $this->redirect;
        $data['operation'] = "List";
        $data['datatable'] = "$this->redirect/get";
		
		return $this->template->load('template', "$this->redirect/home", $data);
	}

	public function get()
    {
        check_ajax();
        $this->load->model('Frames_model', 'data');
        $fetch_data = $this->data->make_datatables();
        $sr = $_GET['start'] + 1;
        $data = [];
        $update = verify_access($this->name, 'update');
        $delete = verify_access($this->name, 'delete');
        foreach($fetch_data as $row)
        {  
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = img(['src' => $this->path.$row->frame, 'width' => '100%', 'height' => '100']);
            $sub_array[] = $row->c_name;
            $sub_array[] = $row->c_type;
            
            $action = '<div class="btn-group" role="group"><button class="btn btn-success dropdown-toggle" id="btnGroupVerticalDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-settings"></span></button><div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start">';
            
            if ($update)
                $action .= anchor($this->redirect."/update/".e_id($row->id), '<i class="fa fa-edit"></i> Edit</a>', 'class="dropdown-item"');
            if ($delete)
                 $action .= form_open($this->redirect.'/delete', 'id="'.e_id($row->id).'"', ['id' => e_id($row->id)]).
                    '<a class="dropdown-item" onclick="script.delete('.e_id($row->id).'); return false;" href=""><i class="fa fa-trash"></i> Delete</a>'.
                    form_close();

            $action .= '</div></div>';
            $sub_array[] = $action;

            $data[] = $sub_array;  
            $sr++;
        }

        $output = [
            "draw"              => intval($_GET["draw"]),  
            "recordsTotal"      => $this->data->count(),
            "recordsFiltered"   => $this->data->get_filtered_data(),
            "data"              => $data
        ];
        
        die(json_encode($output));
    }

    public function add()
	{
        check_access($this->name, 'add');
        $this->form_validation->set_rules($this->validate);

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = $this->title;
            $data['name'] = $this->name;
            $data['operation'] = "Add";
            $data['url'] = $this->redirect;
            
            return $this->template->load('template', "$this->redirect/form", $data);
        }else{
            $image = $this->uploadImage('frame');
            
            if ($image['error'] == TRUE)
			    flashMsg(0, "", $image["message"], "$this->redirect/add");
            else{
                $post = [
                    'c_id'     => d_id($this->input->post('c_id')),
                    'c_type'   => $this->input->post('c_type'),
                    'frame'    => $image['message']
                ];
                
                $id = $this->main->add($post, $this->table);

                flashMsg($id, "$this->title added.", "$this->title not added. Try again.", $this->redirect);
            }
        }
	}

	public function update($id)
	{
        check_access($this->name, 'update');
        $this->form_validation->set_rules($this->validate);

        if ($this->form_validation->run() == FALSE)
        {
            $data['title'] = $this->title;
            $data['name'] = $this->name;
            $data['operation'] = "Update";
            $data['url'] = $this->redirect;
            $data['data'] = $this->main->get($this->table, 'c_id, frame image, c_type', ['id' => d_id($id)]);
            
            return $this->template->load('template', "$this->redirect/form", $data);
        }else{
            $post = [
                    'c_id'     => d_id($this->input->post('c_id')),
                    'c_type'   => $this->input->post('c_type'),
                ];

            if (!empty($_FILES['frame']['name'])) {
                $image = $this->uploadImage('frame');
                if ($image['error'] == TRUE)
                    flashMsg(0, "", $image["message"], "$this->redirect/update/$id");
                else{
                    if (file_exists($this->path.$this->input->post('image')))
                        unlink($this->path.$this->input->post('image'));
                    $post['frame'] = $image['message'];
                }
            }
            
            $id = $this->main->update(['id' => d_id($id)], $post, $this->table);

            flashMsg($id, "$this->title updated.", "$this->title not updated. Try again.", $this->redirect);
        }
	}

	public function delete()
    {
        check_access($this->name, 'delete');
        $this->form_validation->set_rules('id', 'id', 'required|numeric');
        
        if ($this->form_validation->run() == FALSE)
            $response = [
                        'message' => "Some required fields are missing.",
                        'status' => false
                    ];
        else
            if ($this->main->update(['id' => d_id($this->input->post('id'))], ['is_deleted' => 1], $this->table))
                $response = [
                    'message' => "$this->title deleted.",
                    'status' => true
                ];
            else
                $response = [
                    'message' => "$this->title not deleted.",
                    'status' => false
                ];
                
        flashMsg($response['status'], $response['message'], $response['message'], $this->redirect);
    }

    protected $validate = [
        [
            'field' => 'c_id',
            'label' => 'Category',
            'rules' => 'required|numeric',
            'errors' => [
                'required' => "%s is required",
                'numeric' => "%s is invalid.",
            ],
        ],
        [
            'field' => 'c_type',
            'label' => 'Category type',
            'rules' => 'required',
            'errors' => [
                'required' => "%s is required"
            ],
        ]
    ];
}