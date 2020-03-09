<?php
class page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('user/error');
    }
  }
 
  public function index(){
    #admin
      if($this->session->userdata('level')==='1'){
           $this->load->view('header');
          $this->load->view('index');
          $this->load->view('footer');
      }else{
          echo "Access Denied";
      }
 
  }
 
  public function mod(){
    #moderator
    if($this->session->userdata('level')==='2'){
       $this->load->view('header');
          $this->load->view('index');
          $this->load->view('footer');
    }else{
        echo "Access Denied";
    }
  }
 
  public function user(){
   #user
    if($this->session->userdata('level')==='3'){
       $this->load->view('header');
          $this->load->view('index');
          $this->load->view('footer');
    }else{
        echo "Access Denied";
    }
  }
 
}