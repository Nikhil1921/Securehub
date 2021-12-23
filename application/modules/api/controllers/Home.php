<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller  {

    public function __construct()
	{
		parent::__construct();
        $this->load->helper('api');
		$this->banners = $this->config->item('banners');
		$this->news = $this->config->item('news');
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
    			'mobile'   	 => $this->input->post('mobile'),
    			'role'   	 => $this->role,
    			'password'   => my_crypt($this->input->post('password')),
    			'is_deleted' => 0
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
	
	public function forgot_password()
	{
		post();
		verifyRequiredParams(["mobile"]);

		$post = [
    			'mobile'   	 => $this->input->post('mobile'),
    			'role'   	 => $this->role,
    			'is_deleted' => 0
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
			
			$update = ['otp' => 0];

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