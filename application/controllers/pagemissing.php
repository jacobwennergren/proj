<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jakeojossan
 * Date: 2012-04-20
 * Time: 18:03
 * To change this template use File | Settings | File Templates.
 */

class pagemissing extends CI_Controller {

    public function index()
	{
        $data['title'] = "404 - page not found";
         $this->load->view('templates/header', $data);
        $this->load->view('missing_page_view');
        $this->load->view('templates/footer');
	}
}

?>
