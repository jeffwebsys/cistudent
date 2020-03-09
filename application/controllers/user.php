<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <?php
class user extends CI_Controller {
public function __construct(){
parent:: __construct();
 $this->load->library('ciqrcode');
 $this->load->library('pdfgenerator');
 $this->load->helper('pdf_helper');
 $this->load->helper('test_helper');
 $this->load->model('login_model');
 $this->load->helper(array('form', 'url','file')); 
}
  
    public function index()
    {
      if($this->session->userdata('logged_in') == TRUE){
      redirect('page');
    }
        $this->load->view('login');
        
    }

   
public function auth(){
    $email    = $this->input->post('user_name',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_name'];
        $level = $data['user_level'];
        $id = $data['user_id'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'id'     => $id,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
          $this->session->set_userdata($sesdata);
            redirect('page');
 
        // access login for staff
        }elseif($level === '2'){
          $this->session->set_userdata($sesdata);
            redirect('page/mod');
 
        // access login for author
        }else{
          $this->session->set_userdata($sesdata);
            redirect('page/user');
        }
    }else{
    	 $msg = "<div class='alert alert-danger'> Error Username and Password is Incorrect</div>";
        echo $this->session->set_flashdata('msg',$msg);
        redirect('user');
    }
  }
  ############# pages
   public function course(){
   	 
   	 $data['result'] = $this->login_model->fetchcourse();
   	 $this->load->view('header');
     $this->load->view('course', $data);
      $this->load->view('footer');
  }
  public function subject(){
   	 
   	    $data['result'] = $this->login_model->fetchsubject();
   	
   	    $this->load->view('header');
        $this->load->view('subject', $data);
        $this->load->view('footer');
 		}
        public function students(){
   	 
   	    $data['result'] = $this->login_model->fetchstudents();
   	    $this->load->view('header');
        $this->load->view('students', $data);
        $this->load->view('footer');
 		}
 		public function announce(){
   	 
   	    $data['result'] = $this->login_model->fetchannounce();
   	    $this->load->view('header');
        $this->load->view('announce', $data);
        $this->load->view('footer');
 		}
  		public function adduser() {
        $this->login_model->adduser();
        redirect("user/students");
        }
############# Create/Read/Update/Delete
        public function addsubject() {
        $this->login_model->addsubject();
        redirect("user/subject");
        }
        public function subjectupdate() {
        $this->login_model->subjectupdate();
        redirect("user/subject");
        }
        public function deletesubject($id) {
        $this->login_model->deletesubject($id);
        redirect("user/subject");
        }
###Courses
        public function addcourse() {
        $this->login_model->addcourse();
        redirect("user/course");
  	    }
        public function deletecourse($id) {
        $this->login_model->deletecourse($id);
        redirect("user/course");
   		}
   		public function courseupdate() {
        $this->login_model->courseupdate();
        redirect("user/course");
        }
    ####Settings
      public function settings(){
      $data['result'] = $this->login_model->settings();
      $this->load->view('header');
      $this->load->view('settings', $data);
      $this->load->view('footer');
      }
      public function updatesettings($id) {
        $this->login_model->updatesettings($id);
        redirect("user/settings");
      }
      public function editsettings($id) {
        $data['result'] = $this->login_model->editsettings($id);
        $this->load->view('header');
        $this->load->view('editsettings', $data);
        $this->load->view('footer');
        }
        public function studentqr($id) {
        $data['result'] = $this->login_model->studentqr($id);
        $this->load->view('header');
        $this->load->view('studentqr', $data);
        $this->load->view('footer');
        }
############# authorization
        #session expires
        public function error() {
        $this->load->view('error');    
        }
        #logout
        public function logout(){
        $this->session->sess_destroy();
        redirect('user');
        }
         ##upload
        public function qrcodeGenerator ( )
        {
    
        $qrtext = $this->input->post('qrcode_text');  
        if(isset($qrtext))
        {
  
   $SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/caps/assets/images/';
   $text = $qrtext;
   $text1= substr($text, 0,9);  
   $folder = $SERVERFILEPATH;
   $file_name1 = $text1."-Qrcode" . rand(2,200) . ".png";
   $file_name = $folder.$file_name1;
   QRcode::png($text,$file_name);   
   echo"<center><img src=".'http://localhost/caps/assets/images/'.$file_name1."></center";
    }
    else
    {
  echo 'No Text Entered';
    } 
}
#PDF
     public function printr(){
	  
  
    $html_content = file_get_contents('test');
    //$html_content .= $this->login_model->fetchstudents();
    $html_content = $this->load->view('test',[],true);
    $this->pdfgenerator->loadHtml($html_content);
    $this->pdfgenerator->render();
    $this->pdfgenerator->stream("test.pdf",array("Attachment"=>0));
    #$this->pdfgenerator->generate($html);
    }

    public function printinv($id){
    	$data['result'] = $this->login_model->printinv($id);
    	$this->load->view('print',$data);
    }
    #upload script
    public function avatar() { 
      $this->load->view('header');
         $this->load->view('upload_form', array('error' => ' ' )); 
         $this->load->view('footer');
      } 
    public function do_upload() { 

      $test = $this->input->post('register');
      if(isset($test)){
           
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 10000; 
         // $config['max_width']     = 1000; 
         // $config['max_height']    = 500;  
         $this->load->library('upload', $config);
      
         if ( ! $this->upload->do_upload('user_avatar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('header'); 
            $this->load->view('upload_form', $error); 
            $this->load->view('footer');
         }
      
         else { 
           
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('header'); 
            $this->load->view('upload_success', $data);
            $this->load->view('footer'); 
            $fileName = $this->upload->data();
            } 
            $id = $this->session->userdata('username');
            $avatar = $data2['user_avatar'] = $fileName['file_name'];
            $sql = $this->db->query("UPDATE tbl_users SET user_avatar = '$avatar' where user_name = '$id'");
            } 
    }

}#end class