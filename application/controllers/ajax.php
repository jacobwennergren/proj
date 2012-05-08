<?php

class Ajax extends CI_Controller {

  public function username_taken()
  {
    $this->load->model('MUser', '', TRUE);
    $username = trim($_POST['username']);
    // if the username exists return a 1 indicating true
    if ($this->MUser->username_exists($username)) {
      echo '1';
    }
  }

  public function autosuggest()
  {
      echo '<p id="searchResults">'; //open the paragraph for the search results
      $str = $this->input->post('str');
      $this->load->model('Product_model', 'product');
      $data = $this->product->search($str);


      if(sizeof($data) > 0)
      {

      $catid = 0;
          foreach ($data as $result)
          {
             if($result['producttypeid'] != $catid) { // check if the category changed
                 echo '<span class="category">'.$this->product->get_type_from_typeid($result['producttypeid']).'</span>';
                 $catid = $result['producttypeid'];
              }
                 echo '<a href="index.php/products/'.$result['url'].'">';
                 echo '<img src="images/'.$result['imageurl'].'" width="50px" height="50px" alt="" />';

                 $name = $result['name'];
                 if(strlen($name) > 35) {
                    $name = substr($name, 0, 35) . "...";
                 }
                 echo '<span class="searchheading">'.$name.'</span>';

                 $description = $result['shortdescription'];
                 if(strlen($description) > 80) {
                    $description = substr($description, 0, 80) . "...";
                 }

                 echo '<span>'.$description.'</span></a>';
              }
               echo '<span class="seperator"><a href="index.php/suggestions" title="Sitemap">Not satisifed? suggest we add something!</a></span><br class="break" />';
        } else {
           echo 'no results...';
        }
      echo '</p>'; //end the paragraph
}

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect(current_url(), 'refresh');
 }

    
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
}