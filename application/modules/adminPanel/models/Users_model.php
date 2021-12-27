<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Users_model extends MY_Model
{
	public $table = "logins l";
	public $select_column = ['l.id', 'l.name', 'l.mobile', 'l.email', 'b.b_name', 'l.role', 'l.is_activated'];
	public $search_column = ['l.id', 'l.name', 'l.mobile', 'l.email', 'b.b_name'];
    public $order_column = [null, 'l.name', 'l.mobile', 'l.email', 'b.b_name', null];
	public $order = ['l.id' => 'DESC'];

	public function make_query()
	{  
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where(['l.is_deleted' => 0])
                 ->join('branches b', 'b.id = l.branch_id', 'left');
		
		if ($this->user->role !== 'Admin')
			$this->db->where('l.staff_id', $this->session->auth);

		if ($this->input->get('ins_type'))
			$this->db->where('l.role', $this->input->get('ins_type'));

        $this->datatable();
	}

	public function count()
	{
		$this->db->select('l.id')
		         ->from($this->table)
				 ->where(['l.is_deleted' => 0])
                 ->join('branches b', 'b.id = l.branch_id', 'left');
		
		if ($this->user->role !== 'Admin')
			$this->db->where('l.staff_id', $this->session->auth);

		if ($this->input->get('ins_type'))
			$this->db->where('l.role', $this->input->get('ins_type'));
		            	
		return $this->db->get()->num_rows();
	}
}