<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'products');
        //$this->load->library('product');
	}

 function index()
 {
     $data['title'] = "Webshop 2.0";
     $data['products'] = $this->products->get_main_products(); //get the products to show on first page
     //load the site
     $this->load->view('templates/header', $data);
     $this->load->view('home_view', $data);
     $this->load->view('templates/footer');
   }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect(current_url(), 'refresh');
 }

}
