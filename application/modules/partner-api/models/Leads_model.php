<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Leads_model extends MY_Model
{
	public $table = "logins l";
	public $select_column = ['l.id', 'l.name', 'l.mobile', 'l.email'];

	public function make_query($api)
	{
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where(['l.is_deleted' => 0])
				 ->where('l.partner_id', $api)
				 ->where('l.role', 'User')
                 ->join('branches b', 'b.id = l.branch_id', 'left')
				 ->limit($this->input->get("length"), $this->input->get("start"));

	   return $this->db->get()->result();
	}

	public function addUser($table)
	{
		$post = [
    			'mobile'   	 => $this->input->post('mobile'),
    			'email'   	 => $this->input->post('email'),
    			'name'   	 => $this->input->post('name'),
    			'role'   	 => $this->input->post('role'),
                'branch_id'  => d_id($this->input->post('branch_id')),
                'password'   => my_crypt($this->input->post('password'))
    		];

		$this->db->trans_start();
		$this->db->insert($table, $post);
		
        if ($this->input->post('commission')) {
            $data = [];
            foreach ($this->input->post('commission') as $k => $v)
				if($v) $data[] = ['ins_id' => d_id($k), 'commission' => $v, 'user_id' => $this->db->insert_id()];
            $this->db->insert_batch('commissions', $data);
        }
		
        $this->db->trans_complete();
        
		return $this->db->trans_status();
	}

	public function updateUser($table, $user_id)
	{
		$post = [
    			'mobile'   	 => $this->input->post('mobile'),
    			'email'   	 => $this->input->post('email'),
    			'name'   	 => $this->input->post('name'),
    			'role'   	 => $this->input->post('role'),
                'branch_id'  => d_id($this->input->post('branch_id'))
    		];
		
		if ($this->input->post('password'))
            $post['password'] = my_crypt($this->input->post('password'));

		$this->db->trans_start();
		$this->db->where(['id' => $user_id])->update($table, $post);
        
        if ($this->input->post('commission')) {
			$this->db->delete('commissions', ['user_id' => $user_id]);
            $data = [];
            foreach ($this->input->post('commission') as $k => $v)
				if($v) $data[] = ['ins_id' => d_id($k), 'commission' => $v, 'user_id' => $user_id];
            $this->db->insert_batch('commissions', $data);
        }
		
        $this->db->trans_complete();
        
		return $this->db->trans_status();
	}

	public function users_count()
	{
		$this->db->select('l.id')
		         ->from($this->table)
				 ->where(['l.is_deleted' => 0])
                 ->join('branches b', 'b.id = l.branch_id', 'left');
		
		if ($this->user->role == 'Partner')
			$this->db->where('l.partner_id', $this->session->auth);

		$this->db->where('l.role', 'Staff');
		            	
		return $this->db->get()->num_rows();
	}

	public function leads_count($api)
	{
		$this->db->select('l.id')
		         ->from($this->table)
				 ->where(['l.is_deleted' => 0])
                 ->where('l.partner_id', $api)
                 ->where('l.role', "User")
                 ->join('branches b', 'b.id = l.branch_id', 'left');
		            	
		return $this->db->get()->num_rows();
	}
}