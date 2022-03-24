<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller  {

    public function __construct()
	{
		parent::__construct();
        $this->load->helper('api');
		$this->banners = $this->config->item('banners');
		$this->news = $this->config->item('news');
		$this->insurance = $this->config->item('insurance');
		$this->plans = $this->config->item('plans');
		$this->business = $this->config->item('business');
		$this->app_table = $this->config->item('app_table');
		$this->document = $this->config->item('document');
	}

	private $table = 'logins';
	private $role = 'User';
	
	public function banner_list()
	{
		get();
            
		if ($banners = $this->main->getall("banners", 'CONCAT("'.base_url($this->banners).'", banner) banner', [])) {
			$response['row'] = $banners;
			$response['error'] = false;
			$response['message'] = "Banner list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Banner list not success.";
		}

		echoRespnse(200, $response);
	}

	public function insurance_list()
	{
		get();
		
		$insurance = $this->main->getall("insurance", 'id, ins_type', ['parent_id' => 0, 'is_deleted' => 0]);

		$row = array_map(function($ins){
			return [
				'id' 	   		=> $ins['id'],
				'ins_type' 		=> $ins['ins_type'],
				'sub_insurance' => $this->main->getall("insurance", 'id, ins_type, CONCAT("'.base_url($this->insurance).'", image) image', ['parent_id' => $ins['id'], 'is_deleted' => 0])
			];
		}, $insurance);
		
		if ($row) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Insurance list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Insurance list not success.";
		}

		echoRespnse(200, $response);
	}

	public function plan_list()
	{
		get();
		verifyRequiredParams(["ins_id"]);
		
		$plans = ['Popular Plan', 'Suggested Plan', 'All Plan'];

		$row = array_map(function($plan_type){
			return [
				'plan_type' => $plan_type,
				'plans' => $this->main->plan_list($this->plans, $plan_type)
			];
		}, $plans);
		
		if ($row) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Plan list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Plan list not success.";
		}

		echoRespnse(200, $response);
	}
	
	public function news_list()
	{
		get();
            
		if ($news = $this->main->getall("news", 'title, description, CONCAT("'.base_url($this->news).'", image) image', ['is_deleted' => 0])) {
			$response['row'] = $news;
			$response['error'] = false;
			$response['message'] = "News list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "News list not success.";
		}

		echoRespnse(200, $response);
	}
	
	public function send_otp()
	{
		post();
		verifyRequiredParams(["mobile"]);
		$post['mobile'] = $this->input->post('mobile');
		
		$this->main->delete('otp_check', $post);
		
		$post = [
			'mobile' => $post['mobile'],
			'otp' => rand(1000, 9999),
			'valid_till' => date('Y-m-d H:i:s', strtotime('+15 Minutes')),
		];

		if ($this->main->add($post, 'otp_check')) {
			// sms sending start
			$con = $this->config->item('sms')['OTP'];
			$sms = str_replace('{#var#}', $post['otp'], $con['sms']);
			send_sms($post['mobile'], $sms, $con['templete']);
			// sms sending end
			$response['error'] = false;
			$response['message'] = "OTP send success.";
		}else{
			$response['error'] = true;
			$response['message'] = "OTP send not success.";
		}

		echoRespnse(200, $response);
	}

	public function verify_otp()
	{
		post();
		verifyRequiredParams(["mobile", "otp"]);
		
		$post = [
    			'mobile'   	 	=> $this->input->post('mobile'),
    			'otp'   	 	=> $this->input->post('otp'),
				'valid_till >=' => date('Y-m-d H:i:s'),
    		];

		if ($this->main->get('otp_check', 'mobile', $post))
		{
			$post = [
    			'mobile'   	 => $this->input->post('mobile'),
    			'branch_id'  => 0,
    			'role'   	 => $this->role,
				'otp'   	 => 999999,
				'update_at'  => date('Y-m-d H:i:s', strtotime('+5 minutes')),
    		];

			$user = $this->main->get($this->table, 'id', ['role' => $this->role, 'mobile' => $post['mobile'], 'is_deleted' => 0]);

			if ($user)
				$id = $this->main->update(['id' => $user['id']], $post, $this->table);
			else{
				$post['created_at'] = date('Y-m-d H:i:s', strtotime('+5 minutes'));
				$id = $this->main->add($post, $this->table);
			}

			if ($id) {
				$this->main->delete('otp_check', ['mobile' => $post['mobile']]);
				$response['row'] = (string) ($user ? $user['id'] : $id);
				$response['error'] = false;
				$response['message'] = "Login success.";
			} else {
				$response['error'] = true;
				$response['message'] = "Login not success.";
			}
		}
		else
		{
			$response['error'] = true;
			$response['message'] = "Invalid otp or OTP expired.";
		}

		echoRespnse(200, $response);
	}

	/* public function login()
	{
		post();
		verifyRequiredParams(["mobile", "password"]);

		$post = [
    			'mobile'   	 	=> $this->input->post('mobile'),
    			'role'   	 	=> $this->role,
    			'password'   	=> my_crypt($this->input->post('password')),
				'is_varified'   => 1,
    			'is_deleted' 	=> 0
    		];
            
		if ($user = $this->main->get($this->table, 'id, name, mobile', $post)) {
			$response['row'] = $user;
			$response['error'] = false;
			$response['message'] = "Login success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Login not success.";
		}

		echoRespnse(200, $response);
	}
	
	public function signup()
	{
		post();
		verifyRequiredParams(["mobile", 'branch_id']);

		$post = [
    			'mobile'   	 	=> $this->input->post('mobile'),
    			'role'   	 	=> $this->role,
				'is_deleted' 	=> 0
    		];

		$user = $this->main->get($this->table, 'id, is_varified', $post);

		if ($user && $user['is_varified']) {
			$response['error'] = true;
			$response['message'] = "Mobile already registered.";
		}else{
			$this->load->helper('string');
			
			$post = [
    			'mobile'   	 => $this->input->post('mobile'),
    			'branch_id'  => $this->input->post('branch_id'),
    			'role'   	 => $this->role,
    			'otp'   	 => random_string('numeric', 6),
				'otp'   	 => 999999,
				'update_at'  => date('Y-m-d H:i:s', strtotime('+5 minutes')),
    		];

			if ($user)
				$id = $this->main->update(['id' => $user['id']], $post, $this->table);
			else{
				$post['created_at'] = date('Y-m-d H:i:s', strtotime('+5 minutes'));
				$id = $this->main->add($post, $this->table);
			}

			if ($id) {
				// send_sms(); // pendig because sms panel not available.
				$response['row'] = (string) ($user ? $user['id'] : $id);
				$response['error'] = false;
				$response['message'] = "Signup success.";
			} else {
				$response['error'] = true;
				$response['message'] = "Signup not success.";
			}
		}

		echoRespnse(200, $response);
	} */
	
	public function profile()
	{
		get();
		$api = authenticate($this->table);
		
		if ($user = $this->main->get($this->table, 'id, name, mobile, email', ['id' => $api])) {
			$response['row'] = $user;
			$response['error'] = false;
			$response['message'] = "Profile success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Profile not success.";
		}

		echoRespnse(200, $response);
	}

	public function update_profile()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["name", "mobile", "email"]);
	
		if ($this->main->get($this->table, 'id', ['mobile' => $this->input->post('mobile'), 'is_deleted' => 0, 'id != ' => $api, 'role' => $this->role])) {
			$response['error'] = true;
			$response['message'] = "Mobile already in use.";
		} elseif ($this->main->get($this->table, 'id', ['email' => $this->input->post('email'), 'is_deleted' => 0, 'id != ' => $api, 'role' => $this->role])) {
			$response['error'] = true;
			$response['message'] = "Email already in use.";
		} else {
			$post = [
				'mobile'   		=> $this->input->post('mobile'),
				'name'   	    => $this->input->post('name'),
				'email'   	    => $this->input->post('email'),
				'update_at' 	=> date('Y-m-d H:i:s')
			];

			if ($this->main->update(['id' => $api], $post, $this->table)) {
				$response['error'] = false;
				$response['message'] = "Profile updated.";
			} else {
				$response['error'] = true;
				$response['message'] = "Profile not updated.";
			}
		}

		echoRespnse(200, $response);
	}

	/* public function forgot_password()
	{
		post();
		verifyRequiredParams(["mobile"]);

		$post = [
    			'mobile'   	 	=> $this->input->post('mobile'),
    			'role'   	 	=> $this->role,
				'is_varified'   => 1,
    			'is_deleted' 	=> 0
    		];
            
		if ($user = $this->main->get($this->table, 'id', $post)) {
			$this->load->helper('string');
			$update = [
				'otp'   	 => random_string('numeric', 6),
				'otp'   	 => 999999,
				'update_at'  => date('Y-m-d H:i:s', strtotime('+5 minutes')),
			];
			if ($this->main->update(['id' => $user['id']], $update, $this->table) === true) {
				// send_sms(); // pendig because sms panel not available.
				$response['error'] = false;
				$response['message'] = "OTP send success.";
			}else{
				$response['error'] = true;
				$response['message'] = "OTP send not success.";
			}
		}else{
			$response['error'] = true;
			$response['message'] = "Mobile not registered or account blocked.";
		}

		echoRespnse(200, $response);
	}
	
	public function check_otp()
	{
		post();
		verifyRequiredParams(["mobile", 'otp']);

		$post = [
    			'mobile'   		=> $this->input->post('mobile'),
    			'otp'   	    => $this->input->post('otp'),
    			'role'   	 	=> $this->role,
    			'update_at >= ' => date('Y-m-d H:i:s')
    		];
            
		if ($user = $this->main->get($this->table, 'id', $post)) {
			
			$update = ['otp' => 0, 'is_varified' => 1];

			if ($this->main->update(['id' => $user['id']], $update, $this->table) === true) {
				$response['error'] = false;
				$response['message'] = "OTP check success.";
			}else{
				$response['error'] = true;
				$response['message'] = "OTP check not success.";
			}
		}else{
			$response['error'] = true;
			$response['message'] = "OTP expired or Invalid OTP.";
		}

		echoRespnse(200, $response);
	}
	
	public function change_password()
	{
		post();
		verifyRequiredParams(["mobile", "password"]);

		$post = [
    			'mobile'   		=> $this->input->post('mobile'),
    			'role'   	 	=> $this->role
    		];
         	
		$update = [
    			'password'   => my_crypt($this->input->post('password'))
    		];

		if ($this->main->update($post, $update, $this->table) === true) {
			$response['error'] = false;
			$response['message'] = "Password changed. Login with new password.";
		}else{
			$response['error'] = true;
			$response['message'] = "Password not changed. Try again.";
		}
		
		echoRespnse(200, $response);
	} */
	
	public function become_partners()
	{
		post();
		verifyRequiredParams(["name", "mobile", "email", "location", "p_message"]);

		$post = [
    			'name'      => $this->input->post('name'),
    			'mobile'    => $this->input->post('mobile'),
    			'email'     => $this->input->post('email'),
    			'location'  => $this->input->post('location'),
    			'p_message' => $this->input->post('p_message')
    		];

		if ($this->main->add($post, "become_partners") !== false) {
			$response['error'] = false;
			$response['message'] = "Become partners enquiry saved.";
		}else{
			$response['error'] = true;
			$response['message'] = "Become partners enquiry not saved. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function digital_business_price()
	{
		get();

		$price = $this->main->get($this->app_table, 'value price', ['cong_name' => 'business_price']);
		$validity = $this->main->get($this->app_table, 'CONCAT(value, " Months") validity', ['cong_name' => 'business_validity']);
		
		if ($row = array_merge($price, $validity)) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Business price success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Business price not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function digital_business()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["name", "mobile", "email", "address", 'about_us', 'payment_id', 'paid_amount']);

		$logo = $this->uploadImage("logo", $this->business, 'jpg|jpeg|png');

		if ($logo['error'] == TRUE) {
			$response['error'] = true;
			$response['message'] = $logo["message"];
		}else{
			$month = $this->main->check($this->app_table, ['cong_name' => 'business_validity'], 'value');
			for ($i=0; $i < 6; $i++) { 
				if ($i < 3) $banner[$i]['image'] = '';
				$gallery[$i]['image'] = '';
			}
			
			$post = [
					'name'        => $this->input->post('name'),
					'mobile'      => $this->input->post('mobile'),
					'email'       => $this->input->post('email'),
					'address'     => $this->input->post('address'),
					'about_us'    => $this->input->post('about_us'),
					'payment_id'  => $this->input->post('payment_id'),
					'paid_amount' => $this->input->post('paid_amount'),
					'gallery'     => json_encode($gallery),
					'banner'      => json_encode($banner),
					'user_id'     => $api,
					'purchased'   => date('Y-m-d'),
					'expiry'      => date('Y-m-d', strtotime('+ '.($month ? $month : 12).'Months')),
					'logo'        => $logo['message']
				];
				
			if ($this->main->add($post, "digital_business") !== false) {
				$response['error'] = false;
				$response['message'] = "Digital business saved.";
			}else{
				if (file_exists($this->business.$logo['message'])) unlink($this->business.$logo['message']);
				$response['error'] = true;
				$response['message'] = "Digital business not saved. Try again.";
			}
		}

		echoRespnse(200, $response);
	}

	public function business_list()
	{
		get();
		$api = authenticate($this->table);

		$post = [
    			'user_id'    => $api,
    			'is_deleted' => 0
    		];

		$row = array_map(function($arr) {
			return 
				[
					'name'       => $arr['name'],
					'mobile'     => $arr['mobile'],
					'email'      => $arr['email'],
					'address'    => $arr['address'],
					'logo'       => $arr['logo'],
					'about_us'   => $arr['about_us'],
					'gallery'    => json_decode($arr['gallery']),
					'banner'     => json_decode($arr['banner']),
					'payment_id' => $arr['payment_id'],
					'purchased'  => date('d-m-Y', strtotime($arr['purchased'])),
					'expiry'     => date('d-m-Y', strtotime($arr['expiry']))
				];
		}, $this->main->getall("digital_business", 'name, mobile, email, address, logo, about_us, gallery, banner, payment_id, purchased, expiry', $post));

		if ($row) {
			$response['img_url'] = base_url($this->business);
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Business list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Business list not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function upload_banner_gallery()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["id", 'img_type', 'img_no']);
		$img_type = $this->input->post('img_type');
		$img_no = $this->input->post('img_no');
		$id = $this->input->post('id');
		$data = $this->main->get('digital_business', $img_type, ['id' => $id]);

		if (!$data) {
			$response['error'] = true;
			$response['message'] = "Digital business not found. Try again.";
			echoRespnse(200, $response);
		}

		$data = json_decode($data[$img_type]);
		$unlink = $data[$img_no]->image;
		$image = $this->uploadImage("image", $this->business, 'jpg|jpeg|png');

		if ($image['error'] == TRUE) {
			$response['error'] = true;
			$response['message'] = $image["message"];
		}else{
			$data[$img_no]->image = $image['message'];
			
			$post = [ $img_type => json_encode($data) ];

			if ($this->main->update(['id' => $id], $post, "digital_business") !== false) {
				if ($unlink && file_exists($this->business.$unlink)) unlink($this->business.$unlink);
				$response['error'] = false;
				$response['message'] = "Digital business saved.";
			}else{
				if (file_exists($this->business.$image['message'])) unlink($this->business.$image['message']);
				$response['error'] = true;
				$response['message'] = "Digital business not saved. Try again.";
			}
		}

		echoRespnse(200, $response);
	}

	public function business_frames_list()
	{
		get();

		$post = [ 'is_deleted' => 0 ];

		$row = $this->main->getall("business_frames", 'CONCAT("'.base_url($this->business).'", frame)frame', $post);

		if ($row) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Business frame list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Business frame list not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function add_vehicle()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["reg_no"]);

		$post = [ 'user_id' => $api, 'reg_no' => $this->input->post('reg_no') ];

		if ($this->main->add($post, "vehicles")) {
			$response['error'] = false;
			$response['message'] = "Add vehicle success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Add vehicle not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function update_vehicle()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["id", "reg_no"]);

		$post = [ 'reg_no' => $this->input->post('reg_no') ];

		if ($this->main->update(['id' => $this->input->post('id')], $post, "vehicles")) {
			$response['error'] = false;
			$response['message'] = "Update vehicle success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Update vehicle not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function vehicle_list()
	{
		get();
		$api = authenticate($this->table);		

		$post = [ 'user_id' => $api, 'is_deleted' => 0 ];

		if ($row = $this->main->getall("vehicles", 'id, reg_no', $post)) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Vehicle list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Vehicle list not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function add_vehicle_document()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["veh_id", 'document_name', 'expiry_date']);

		$image = $this->uploadImage("image", $this->document, 'jpg|jpeg|png|pdf');

		if ($image['error'] == TRUE) {
			$response['error'] = true;
			$response['message'] = $image["message"];
		}else{
			$post = [ 
				'veh_id' => $this->input->post('veh_id'),
				'document_name' => $this->input->post('document_name'),
				'expiry_date' => date('Y-m-d', strtotime($this->input->post('expiry_date'))),
				'image'	=> $image["message"]
			];
	
			if ($row = $this->main->add($post, "vehicle_documents")) {
				$response['error'] = false;
				$response['message'] = "Add vehicle document success.";
			}else{
				if (file_exists($this->document.$image['message'])) unlink($this->document.$image['message']);
				$response['error'] = true;
				$response['message'] = "Add vehicle document not success. Try again.";
			}
		}
		
		echoRespnse(200, $response);
	}

	public function add_document()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(['document_name', 'doc_type', 'expiry_date', 'notification']);

		$image = $this->uploadImage("image", $this->document, 'jpg|jpeg|png|pdf');

		if ($image['error'] == TRUE) {
			$response['error'] = true;
			$response['message'] = $image["message"];
		}else{
			$post = [ 
				'user_id' 		=> $api,
				'document_name' => $this->input->post('document_name'),
				'notification' 	=> $this->input->post('notification'),
				'doc_type' 		=> $this->input->post('doc_type'),
				'expiry_date' 	=> date('Y-m-d', strtotime($this->input->post('expiry_date'))),
				'image'			=> $image["message"]
			];
	
			if ($row = $this->main->add($post, "user_documents")) {
				$response['error'] = false;
				$response['message'] = "Add document success.";
			}else{
				if (file_exists($this->document.$image['message'])) unlink($this->document.$image['message']);
				$response['error'] = true;
				$response['message'] = "Add document not success. Try again.";
			}
		}
		
		echoRespnse(200, $response);
	}

	public function vehicle_document_list()
	{
		get();
		$api = authenticate($this->table);
		verifyRequiredParams(["veh_id"]);

		$post = [ 'is_deleted' => 0, 'veh_id' => $this->input->get('veh_id') ];

		if ($row = $this->main->getall("vehicle_documents", 'id, veh_id, document_name, CONCAT("'.base_url($this->document).'", image) image, expiry_date', $post)) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Vehicle document list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Vehicle document list not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function document_list()
	{
		get();
		$api = authenticate($this->table);

		$post = [ 'is_deleted' => 0, 'user_id' => $api ];

		if ($row = $this->main->getall("user_documents", 'id, document_name, CONCAT("'.base_url($this->document).'", image) image, doc_type, expiry_date, notification', $post)) {
			$response['row'] = $row;
			$response['error'] = false;
			$response['message'] = "Document list success.";
		}else{
			$response['error'] = true;
			$response['message'] = "Document list not success. Try again.";
		}
		
		echoRespnse(200, $response);
	}

	public function error_404()
	{
		return $this->load->view('error_404');
	}

	protected function uploadImage($upload, $path, $allowed)
    {
        $this->load->library('upload');
        $config = [
                'upload_path'      => $path,
                'allowed_types'    => $allowed,
                'file_name'        => time(),
                'file_ext_tolower' => TRUE
            ];
        
        $this->upload->initialize($config);
        if ($this->upload->do_upload($upload)){
            $img = $this->upload->data("file_name");
            $name = $this->upload->data("raw_name");
            
            if (in_array($this->upload->data('file_ext'), ['.jpg', '.jpeg']))
                $image = imagecreatefromjpeg($path.$img);
            if ($this->upload->data('file_ext') == '.png')
                $image = imagecreatefrompng($path.$img);

            if (isset($image)){
                convert_webp($path, $image, $name);
                unlink($path.$img);
                $img = "$name.webp";
            }
            
            return ['error' => false, 'message' => $img];
        }else
            return ['error' => true, 'message' => strip_tags($this->upload->display_errors())];
    }
}