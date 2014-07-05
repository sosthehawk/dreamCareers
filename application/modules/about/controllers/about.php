<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller {
    
    function __construct() {
    parent::__construct();
//    $this->load->helper('form');
//    $this->load->helper('url');
//    $this->load->helper('security');
   // $this->load->model('users_model');
    //$this->load->database();
     $this->load->helper('date');
     echo Modules::run('header/index');
     echo Modules::run('navigation/index');
     
 }
 
    public function index(){
       $this->show_content();
       echo Modules::run('footer/index');
    }
    
    public function show_content(){ 
      $this->load->view('view_content_about');
            
    }
    
        //if a user is currently loggedin, the session expiry will be be increased by 15 minutes. And then returns true; false otherwise.
    public function checkActiveUsers(){
        session_start();
        $this->load->model("mdl_loggedin");
        $user=$this->mdl_loggedin->isLoggedIn(); // checks if a users is currently logged in.
        if($user){
            $expires=time() + (60*15); //if a user is currently loggedin, the session expiry will be be increased by 15 minutes.
            $this->db->query("UPDATE active_users SET expires=".$expires." WHERE user_id=".(int) $user."");
            return TRUE;
        } else{
            return FALSE;
        }
    }
}
