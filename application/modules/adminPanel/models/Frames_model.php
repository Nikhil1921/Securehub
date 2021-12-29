<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Frames_model extends MY_Model
{
	public $table = "business_frames b";
	public $select_column = ['b.id', 'b.frame'];
	public $search_column = ['b.id', 'b.frame'];
    public $order_column = [null, 'b.frame', null];
	public $order = ['b.id' => 'DESC'];

	public function make_query()
	{  
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where(['is_deleted' => 0]);

        $this->datatable();
	}

	public function count()
	{
		$this->db->select('b.id')
		         ->from($this->table)
				 ->where(['is_deleted' => 0]);
		            	
		return $this->db->get()->num_rows();
	}
}