<?php
class login_model extends CI_Model{
    public function validate($email,$password){
    $this->db->where('user_name',$email);
    $this->db->where('user_password',$password);
    $result = $this->db->get('tbl_users',1);
    return $result;
  }
   ##### Retrieve Data
       function fetchcourse() {
 	// $this->db->select('*');
	// $this->db->from('courses');
	// $this->db->join('tbl_users', 'tbl_users.course_id = courses.course_id');
	// $query = $this->db->get();
	// return $query->result();
    	$this->db->select('*');
    	$this->db->from('courses');
    	$query = $this->db->get();
    	return $query->result();

       }
       function fetchsubject() {
 	   $this->db->select('*');
	   $this->db->from('courses');
	   $this->db->join('subject', 'subject.course_id = courses.course_id');
	   $query = $this->db->get();
	   return $query->result();
        }
        function fetchstudents() {
        $this->db->select('*');
 	    $this->db->from('tbl_users');
        $this->db->where('user_level',3);
 	    $this->db->join('courses','courses.course_id = tbl_users.course_id' );
 	    $this->db->order_by('user_date', 'DESC');
 	    $query = $this->db->get();
	    return $query->result();
        }

        function fetchannounce() {
        $this->db->select('*');
        $this->db->from('announce');
        $query = $this->db->get();
        return $query->result();
        }
    
    
        ##### Create/Read/Update/Delete
        function adduser() {
         

        $data = array (
            
           
            'user_name' => $this->input->post('user_name'),
            'user_password' => $this->input->post('user_password'),
            'user_level' => $this->input->post('user_level'),
            'user_email' => $this->input->post('user_email'),
            'course_id' => $this->input->post('course_id'),
            'user_gender' => $this->input->post('user_gender')
                         
                         
        );         
        
        $code = rand(1000,9999);
        $this->db->set('user_date', 'NOW()', FALSE);
        $this->db->set('user_token',$code);
        $this->db->insert('tbl_users', $data);
        $name = $this->session->userdata('username');
        $role = $this->input->post('user_level');
        if($role == '1'){
            $sql = "Administrator";
        }else if($role == '2'){
            $sql = "Teacher";
        }else{
            $sql = "Student";
        }
        $number = '09567755688';
        $user = $this->input->post('user_name');
        $gender = $this->input->post('user_gender');
        $result = itexmo("$number","Hi $sql $user your token code to access the panel is:$code!","TR-JEFFR755688_SBBC7");
        if ($result == ""){
        echo "Server Fail to Reach";  
        }else if ($result == 0){
        redirect('user/students');
        }else{   
        echo "Error Num ". $result . " was encountered!";
        }
        
        // $admin = $this->input->post('user_name');
        // $admin2 = "Added $sql: $admin";
        // $this->db->set('admin_who',$name);
        // $this->db->set('admin_edits',$admin2);
        // $this->db->set('admin_date', 'NOW()', FALSE);
        // $this->db->insert('settings');
       
        }
        function addcourse() {
        $data = array (
            
            'course_code' => $this->input->post('course_code'),
            'course_desc' => $this->input->post('course_desc')       
        );
        $this->db->insert('courses', $data);
        // $name = $this->session->userdata('username');
        // $admin = $this->input->post('course_desc');
        // $admin2 = "Added Course: $admin";
        // $this->db->set('admin_who',$name);
        // $this->db->set('admin_edits',$admin2);
        // $this->db->set('admin_date', 'NOW()', FALSE);
        // $this->db->insert('settings');
        }
        function addsubject() {
        $data = array (
            
            'course_id' => $this->input->post('course_id'),
            'subject_name' => $this->input->post('subject_name'),
            'subject_code' => $this->input->post('subject_code')

        );
        
       
        $this->db->insert('subject', $data);

        ##history
        // $name = $this->session->userdata('username');
        // $admin = $this->input->post('subject_name');
        // $admin2 = "Added $admin Subject";
        // $this->db->set('admin_who',$name);
        // $this->db->set('admin_edits',$admin2);
        // $this->db->set('admin_date', 'NOW()', FALSE);
        // $this->db->insert('settings');
        }

        ### Subjects
        
        
        function subjectupdate() {
        $post =  $this->input->post('update');
        if(isset($post)){
        $sql = $this->input->post('subject_id');
        $data = array (       
        'subject_name' => $this->input->post('subject_name'),
        'subject_code' => $this->input->post('subject_code')
        );
            
        $this->db->where('subject_id', $sql);
        $this->db->update('subject', $data);
        }
        }
        function deletesubject($id) {
        $this->db->where('subject_id', $id);
        $this->db->delete('subject');
        $this->db->set('admin_history',$id);
        ##history
        $name = $this->session->userdata('username');   
        $admin2 = "Deleted Subject ID";
        $this->db->set('admin_who',$name);
        $this->db->set('admin_edits',$admin2);
        $this->db->set('admin_date', 'NOW()', FALSE);
        $this->db->insert('settings');

        //$admin = $this->input->post();

        
        }

        ###Courses
        function courseupdate() {
        $post =  $this->input->post('update');
        if(isset($post)){
        $sql = $this->input->post('course_id');
        $data = array (       
        'course_desc' => $this->input->post('course_desc'),
        'course_code' => $this->input->post('course_code')
        );
        $this->db->where('course_id', $sql);
        $this->db->update('courses', $data);
        }
        }
        function deletecourse($id) {
        $this->db->where('course_id', $id);
        $this->db->delete('courses');
        }
        ###admin settings
        function settings(){

        $this->db->select('*');
        $this->db->from('settings');
        $this->db->where('activity_id',1);
        $query = $this->db->get();
        return $query->result();

        }
        function editsettings($id) {
        $query = $this->db->query('SELECT * FROM settings WHERE `activity_id` =' .$id);
        return $query->row();
        }
        function studentqr($id) {
        $query = $this->db->query('SELECT * FROM tbl_users WHERE `user_id` =' .$id);
        return $query->row();
        }
        function updatesettings($id) {
        $data = array (
            'admin_sitename' => $this->input->post('admin_sitename')
            
        );
        $this->db->where('activity_id', $id);
        $this->db->update('settings', $data);
        }
        #invoice
        function printinv($id) {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('user_id',$id);
        $this->db->join('courses','courses.course_id = tbl_users.course_id' );
        $query = $this->db->get();
        return $query->row();

        }
        
        function history(){

        $this->db->select('*');
        $this->db->from('settings');
        $query = $this->db->get();
        return $query->result();

        }

        }#end class
