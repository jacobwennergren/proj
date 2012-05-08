<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jakeojossan
 * Date: 2012-05-07
 * Time: 16:13
 * To change this template use File | Settings | File Templates.
 */

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'products');
        //$this->load->library('product');
	}

    function showProduct($url){
        $product = $this->products->get_product_from_url($url);
        if($product != false){
            $data['title'] = $product->name;
            $data['product'] = $product;
            $this->load->view('templates/header', $data);
            $this->load->view('product', $data);
            $this->load->view('templates/footer');
        } else {
            $data['url'] = '/products/'.$url;
            redirect('pagemissing', $data);
        }

    }

    function index(){
       redirect('home', 'refresh');
    }

}
