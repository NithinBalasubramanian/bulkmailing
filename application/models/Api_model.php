<?php
class Api_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    public function fetch_all($tablename)
    {
        $this->db->select('*');
        $this->db->from($tablename);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function create($tablename , $data)
    {
        $this->db->insert($tablename,$data);
		return $this->db->insert_id();
    }
}
?>