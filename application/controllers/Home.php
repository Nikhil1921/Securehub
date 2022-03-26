<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function index()
	{
		$data['name'] = 'home';
		$data['title'] = 'Home';

		return $this->template->load('template', "home", $data);
	}

	public function become_partner()
	{
		$data['name'] = 'become_partner';
		$data['title'] = 'Become Partner';
		$data['breads'] = [['title' => 'Become Partner']];
		$data['heading'] = '<span class="page_heading">Become</span> Partner';
		$data['validate'] = TRUE;

		return $this->template->load('template', "become_partner", $data);
	}

	public function motor($page)
	{
		$data['name'] = 'motor_insurance';
		$data['validate'] = TRUE;
		
		switch ($page) {
			case 'car':
				$data['title'] = 'Car insurance';
				break;
			case 'bike':
				$data['title'] = 'Bike insurance';
				break;
			case 'taxi':
				$data['title'] = 'PCV (Passenger Carrying Vehicle)';
				break;
			case 'truck':
				$data['title'] = 'GCV (Goods Carrying Vehicle)';
				break;
			case 'misc':
				$data['title'] = 'Misc D insurance';
				break;
			case 'staff-buses':
				$data['title'] = 'Staff Buses insurance';
				break;
			case 'school-buses':
				$data['title'] = 'School Buses insurance';
				break;
			
			default:
				return $this->error_404();
				break;
		}

		return $this->template->load('template', "motor/$page", $data);
	}

	public function motor_post($page)
	{
		$table = 'motor_insurance';
		
		switch ($page) {
			case 'car':
			case 'bike':
			case 'taxi':
			case 'truck':
			case 'misc':
			case 'staff-buses':
			case 'school-buses':
				$this->path = $this->config->item('document');

				$uplod_rc = $this->uploadImage('uplod_rc', $exts='jpg|jpeg|png|pdf', [], round(microtime(true) * 1000));
				
				if($uplod_rc['error']) die(json_encode($uplod_rc));
				
				$ext_policy['message'] = '';
				
				if (!empty($_FILES['ext_policy']['name'])) {
					$ext_policy = $this->uploadImage('ext_policy', $exts='jpg|jpeg|png|pdf', [], round(microtime(true) * 1000));
					if($ext_policy['error']){
						if(is_file($this->path.$uplod_rc['message'])) unlink($this->path.$uplod_rc['message']);
						die(json_encode($ext_policy));
					}
				}

				$post = [
					'ins_type'	  => $this->input->post('ins_type'),
					'reg_no'	  => $this->input->post('reg_no'),
					'veh_make'	  => $this->input->post('veh_make'),
					'veh_model'	  => $this->input->post('veh_model'),
					'mobile'	  => $this->input->post('mobile'),
					'email'		  => $this->input->post('email'),
					'exp_date'	  => $this->input->post('exp_date'),
					'claim'		  => $this->input->post('claim'),
					'ext_policy'  => $ext_policy['message'],
					'name'		  => $this->input->post('name'),
					'message'	  => $this->input->post('message'),
					'uplod_rc'	  => $uplod_rc['message'],
				];

				if($this->main->add($post, $table))
					$response = [
						'error' => false,
						'message' => 'Request saved successfully.'
					];
				else
					$response = [
						'error' => true,
						'message' => 'Request not saved.'
					];
				
				break;
			
			default:
				$response = [
					'error' => true,
					'message' => 'Something is not going good.'
				];
				break;
		}

		die(json_encode($response));
	}

	public function life($page)
	{
		$data['name'] = 'life_insurance';
		$data['validate'] = TRUE;
		
		switch ($page) {
			case 'regular-income':
				$data['title'] = 'Regular Income';
				break;
			case 'need-base-solution':
				$data['title'] = 'Need Base Solution';
				break;
			case 'child-mrg':
				$data['title'] = 'Child Mrg';
				break;
			case 'family-protection':
				$data['title'] = 'Family Protection';
				break;
			case 'income-protection':
				$data['title'] = 'Income Protection';
				break;
			case 'retirement-solution':
				$data['title'] = 'Retirement Solution';
				break;
			case 'tax-benifit':
				$data['title'] = 'Tax Benifit';
				break;
			
			default:
				return $this->error_404();
				break;
		}

		return $this->template->load('template', "life/$page", $data);
	}

	public function life_post($page)
	{
		$table = 'life_insurance';
		
		switch ($page) {
			case 'regular-income':
			case 'need-base-solution':
			case 'child-mrg':
			case 'family-protection':
			case 'income-protection':
			case 'retirement-solution':
			case 'tax-benifit':
				$post = [
					'name'		  => $this->input->post('name'),
					'mobile'	  => $this->input->post('mobile'),
					'dob'	  	  => $this->input->post('dob'),
					'email'		  => $this->input->post('email'),
					'dob'	  	  => $this->input->post('dob'),
					'location'	  => $this->input->post('location'),
					'occupation'  => $this->input->post('occupation'),
					'income'	  => $this->input->post('income'),
					'education'	  => $this->input->post('education'),
				];

				if($this->main->add($post, $table))
					$response = [
						'error' => false,
						'message' => 'Request saved successfully.'
					];
				else
					$response = [
						'error' => true,
						'message' => 'Request not saved.'
					];
				
				break;
			
			default:
				$response = [
					'error' => true,
					'message' => 'Something is not going good.'
				];
				break;
		}

		die(json_encode($response));
	}

	public function other($page)
	{
		$data['name'] = 'other_insurance';
		$data['validate'] = TRUE;
		
		switch ($page) {
			case 'workmen-compensation':
				$data['title'] = 'Workmen Compensation';
				break;
			case 'cpm':
				$data['title'] = 'Plant and Machinery (CPM)';
				break;
			case 'fire-insurance':
				$data['title'] = 'Fire insurance';
				break;
			case 'home-insurance':
				$data['title'] = 'Home insurance';
				break;
			case 'shopkeeper-insurance':
				$data['title'] = 'Shopkeeper insurance';
				break;
			case 'office-package-policy':
				$data['title'] = 'Office package policy';
				break;
			case 'travel-insurance':
				$data['title'] = 'Travel insurance';
				break;
			case 'marine-insurance':
				$data['title'] = 'Marine insurance';
				break;
			
			default:
				return $this->error_404();
				break;
		}

		return $this->template->load('template', "other/$page", $data);
	}

	public function other_post($page)
	{
		$table = 'other_insurance';
		
		switch ($page) {
			case 'workmen-compensation':
			case 'cpm':
			case 'fire-insurance':
			case 'home-insurance':
			case 'shopkeeper-insurance':
			case 'office-package-policy':
			case 'travel-insurance':
			case 'marine-insurance':
				$post = [
					'name' => $this->input->post('name'),
					'mobile' => $this->input->post('mobile'),
					'email' => $this->input->post('email'),
					'location' => $this->input->post('location'),
					'message' => $this->input->post('message')
				];

				if($this->main->add($post, $table))
					$response = [
						'error' => false,
						'message' => 'Request saved successfully.'
					];
				else
					$response = [
						'error' => true,
						'message' => 'Request not saved.'
					];
			break;
			
			default:
				$response = [
					'error' => true,
					'message' => 'Something is not going good.'
				];
			break;
		}

		die(json_encode($response));
	}

	public function health($page)
	{
		$data['name'] = 'health_insurance';
		$data['validate'] = TRUE;
		
		switch ($page) {
			case 'mediclaim':
				$data['title'] = 'Workmen Compensation';
				break;
			case 'covid':
				$data['title'] = 'Plant and Machinery (CPM)';
				break;
			case 'gpa':
				$data['title'] = 'Fire insurance';
				break;
			case 'personal-accidents':
				$data['title'] = 'Home insurance';
				break;
			case 'shopkeeper-insurance':
				$data['title'] = 'Shopkeeper insurance';
				break;
			case 'gmc':
				$data['title'] = 'Office package policy';
				break;
			
			default:
				return $this->error_404();
				break;
		}

		return $this->template->load('template', "health/$page", $data);
	}

	public function health_post($page)
	{
		$table = 'health_insurance';
		
		switch ($page) {
			case 'mediclaim':
			case 'covid':
			case 'gpa':
			case 'personal-accidents':
			case 'shopkeeper-insurance':
			case 'gmc':
				$post = [
					'adult_qty' => $this->input->post('adult_qty'),
					'child_qty' => $this->input->post('child_qty'),
					'age' => $this->input->post('age'),
					'gender' => $this->input->post('gender'),
					'sum_insured' => $this->input->post('sum_insured'),
					'pincode' => $this->input->post('pincode'),
					'mobile' => $this->input->post('mobile'),
					'email' => $this->input->post('email'),
					'name' => $this->input->post('name'),
				];
				
				if($this->main->add($post, $table))
					$response = [
						'error' => false,
						'message' => 'Request saved successfully.'
					];
				else
					$response = [
						'error' => true,
						'message' => 'Request not saved.'
					];
			break;
			
			default:
				$response = [
					'error' => true,
					'message' => 'Something is not going good.'
				];
			break;
		}

		die(json_encode($response));
	}
	
	public function error_404()
	{
		$data['name'] = 'error_404';
		$data['title'] = 'Error 404';

		return $this->template->load('template', "error_404", $data);
	}
}