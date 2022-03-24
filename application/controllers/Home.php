<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
		$data['name'] = 'home';
		$data['title'] = 'Home';

		return $this->template->load('template', "home", $data);
	}

	public function become_partner()
	{
		$data['name'] = 'become_partner';
		$data['title'] = 'Become partner';
		$data['breads'] = [['title' => 'Become Partner']];

		return $this->template->load('template', "become_partner", $data);
	}

	public function motor($page)
	{
		$data['name'] = 'motor_insurance';
		
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
	
	public function error_404()
	{
		$data['name'] = 'error_404';
		$data['title'] = 'Error 404';

		return $this->template->load('template', "error_404", $data);
	}
}