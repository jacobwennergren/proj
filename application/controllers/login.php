<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
   $this->load->helper(array('form', 'url'));
   $data['title'] = 'Login';
   $this->load->view('templates/header', $data);
   $this->load->view('login_view');
   $this->load->view('templates/footer');
 }

 function signup(){
        $this->load->helper(array('form', 'url'));
   $data['title'] = 'Signup';
   $this->load->view('templates/header', $data);
   $this->load->view('signup_view');
   $this->load->view('templates/footer');
 }

}

?>