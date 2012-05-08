<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jakeojossan
 * Date: 2012-05-07
 * Time: 12:45
 * To change this template use File | Settings | File Templates.
 */
 
class Product_model extends CI_Model {

    var $id = '';
    var $name   = '';
    var $shortdescription = '';
    var $longdescription = '';
    var $imageurl = '';
    var $price = '';
    var $producttypeid = '';
    var $producttype = '';

    function __construct()
    {
        // Call the Model constructor
       // parent::__construct(); //no need?
        $this->load->database();
    }

    function get_product_from_url($url)
    {
        $this->db->select('*')->from('products')->where('url', $url);
        $query = $this->db->get();
        if($query -> num_rows() == 1)
        {
            $result = $query->result();//param: 'Product_model' if needed
            $product = $result[0];
            return $product;
        }
        else
        {
        return false;
        }

    }

    function get_main_products(){
        $this->db->select('*')->from('products')->group_by('producttypeID')->limit(9);
        $query = $this->db->get();
        return $query->result('Product_model');
    }

    function insert_product()
    {
        $this->name   = $this->load->post('name');
        $this->shortdescription = $this->load->post('shortdescription');
        $this->longdescription   = $this->load->post('longdescription');
        $this->imageurl   = $this->load->post('imageurl');
        $this->price   = $this->load->post('price');
        $this->producttypeid = $this->load->post('categoryID');

        $this->db->insert('products', $this);
    }

    function search($str)
    {
       $this->db->select('*')->from('products')->like('name', $str)->or_like('shortdescription', $str)
                ->or_like('longdescription', $str)->group_by('producttypeID');
        $query = $this->db->get();

//        $query = $this->db->get('products');
       return $query->result_array();

    }

    function get_type_from_typeid($id)
    {
        $this->db->select('name')->from('productType')->where('id', $id);
        $query = $this->db->get();
        $name = $query->row();
        return $name->name;
    }

}