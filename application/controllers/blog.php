<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jakeojossan
 * Date: 2012-04-18
 * Time: 17:59
 * To change this template use File | Settings | File Templates.
 */

class Blog extends CI_Controller {

	public function index()
	{
        $this->load->model('Blog_model', 'blog', TRUE);
        $data['query'] = $this->blog->get_last_ten_entries();
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
        $data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";
        $this->load->view('blogview', $data);

	}

    public function comments()
	{
		echo 'Look at this!';
	}

    public function shoes($sandals, $id)
    {
        echo $sandals;
        echo $id;
    }

    public function apa()
    {
        echo " apans! ";
    }

}
?>
