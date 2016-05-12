<?php

class Administrator_Model extends CI_Model{
	
	public function save_category_info($data)
	{
		$this->db->insert('tbl_category',$data);
	}
	
	public function select_all_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
	
	public function select_all_published_category()
	{
		$this->db->select('*');
        $this->db->from('tbl_category');
		$this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
	}
	
	public function unpublished_category_by_id($category_id)
    {
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
	
	public function save_blog_info($data)
	{
		$this->db->insert('tbl_blog',$data);
	}
}
?>