<?php
class Admin_model extends CI_Model{
	
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	public function user($user_name,$password)
		{
			$this->db->select('*');
			$this->db->from("employee");
			$this->db->where('emp_name',$user_name);
			$this->db->where('user_type',$password);
			$result=$this->db->get();
			return $result->result_array();
		}
	public function table($table)
		{
			return $fields = $this->db->list_fields($table);
			$this->db->last_query();
		}
	public function create($tablename,$data=array())
		{
			$this->db->insert($tablename,$data);
			return $this->db->insert_id();
		}
	function table_column($tablename, $column =FALSE,$val=FALSE, $column1 = FALSE, $val1 = FALSE, $column2 = FALSE, $val2 = FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			if($column != FALSE){
				$this->db->where($column, $val);
			}
            if($column1 != FALSE) {
				$this->db->where($column1, $val1);
			}
            if($column2 != FALSE) {
				$this->db->where($column2, $val2);
			}
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_or($tablename, $column =FALSE,$val=FALSE, $column1 = FALSE, $val1 = FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			if($column != FALSE){
				$this->db->where($column, $val);
			}
			if($column1 != FALSE) {
				$this->db->or_where($column1, $val1);
			}
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_desc_limit($tablename, $column =FALSE ,$val=FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			$this->db->order_by('date_created', 'DESC');
			$this->db->group_by('customer_id');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_column_desc($tablename, $column =FALSE ,$val=FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			$this->db->order_by('date_created', 'DESC');
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_select_data($tablename,$column,$val)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function table_select_data_limit($tablename,$column,$val)
		{
			$return = array();
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function val_check($tablename, $column = FALSE, $val = FALSE, $column1 = FALSE, $val1 = FALSE, $column2 = FALSE, $val2 = FALSE)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column, $val);
			if($column1 != FALSE) {
				$this->db->where($column1, $val1);
			}
			if($column2 != FALSE) {
				$this->db->where($column2, $val2);
			}
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	function val_check_ser($tablename , $column , $val , $min , $max)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where($column , $val);
			$this->db->where('date_created >=',$min);
			$this->db->where('date_created <=',$max);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
		
	public function like_check($tablename,$column,$val)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->like($column,$val);
			$result = $this->db->get();
		//	return $this->db->last_query();
			return $result->result_array();
		}
	
	public function delete_row($tablename, $delete_id)
		{
			$this->db->select('*');
			$this->db->from($tablename);
			$this->db->where('id', $delete_id);
			return $query = $this->db->delete($tablename);
		}
	public function update_all($tablename, $data=array(),$where=array())
		{
			return $this->db->update($tablename,$data,$where);
		}
}