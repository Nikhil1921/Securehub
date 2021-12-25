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
	
	public function login()
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
		verifyRequiredParams(["mobile"]);

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
	}
	
	public function update_profile()
	{
		post();
		$api = authenticate($this->table);
		verifyRequiredParams(["name", "mobile", "email", "password"]);
	
		if ($this->main->get($this->table, 'id', ['mobile' => $this->input->post('mobile'), 'is_deleted' => 0, 'is_varified' => 1, 'id != ' => $api, 'role' => $this->role])) {
			$response['error'] = true;
			$response['message'] = "Mobile already in use.";
		} elseif ($this->main->get($this->table, 'id', ['email' => $this->input->post('email'), 'is_deleted' => 0, 'is_varified' => 1, 'id != ' => $api, 'role' => $this->role])) {
			$response['error'] = true;
			$response['message'] = "Email already in use.";
		} else {
			$post = [
				'mobile'   		=> $this->input->post('mobile'),
				'name'   	    => $this->input->post('name'),
				'email'   	    => $this->input->post('email'),
				'password'   	=> my_crypt($this->input->post('password')),
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

	public function forgot_password()
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
	}
	
	public function become_partners()
	{
		post();
		verifyRequiredParams(["name", "mobile", "email"]);

		$post = [
    			'name'   => $this->input->post('name'),
    			'mobile' => $this->input->post('mobile'),
    			'email'  => $this->input->post('email')
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

	public function error_404()
	{
		$this->load->view('error_404');
	}
}