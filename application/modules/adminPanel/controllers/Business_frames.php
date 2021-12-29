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
        $delete = verify_access($this->name, 'delete');
        foreach($fetch_data as $row)
        {  
            $sub_array = [];
            $sub_array[] = $sr;
            $sub_array[] = img(['src' => $this->path.$row->frame, 'width' => '100%', 'height' => '100']);
            
            $action = '<div class="btn-group" role="group"><button class="btn btn-success dropdown-toggle" id="btnGroupVerticalDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-settings"></span></button><div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" x-placement="bottom-start">';
            
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

	public function upload()
	{
        check_access($this->name, 'add');
		$image = $this->uploadImage('frame');

		if ($image['error'] == TRUE)
			flashMsg(0, "", $image["message"], $this->redirect);
        else{
			$id = $this->main->add(['frame' => $image['message']], $this->table);

			flashMsg($id, "$this->title uploaded.", "$this->title not uploaded. Try again.", $this->redirect);
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
}