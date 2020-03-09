<?php 

function course(){

	$this->db->select('course_desc');
	$this->db->from('courses');
	$query = $this->db->get();
	return $query->result();

}

?>