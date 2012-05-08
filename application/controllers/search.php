<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jakeojossan
 * Date: 2012-04-20
 * Time: 18:03
 * To change this template use File | Settings | File Templates.
 */

class Search extends CI_Controller {

    private function isAjax() {
    return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'));
    }

    function performSearch(){
        if($this->isAjax()){
            $str = $_POST['queryString'];
            echo 'Svar på din fråga:';
            echo $str;
            return;
        }
        echo "hmm, ej ajax?";
    }

    public function index()
	{
        $data['title'] = "Sok sida";
         $this->load->view('templates/header', $data);
        $this->load->view('search');
        $this->load->view('templates/footer');
	}
}

?>