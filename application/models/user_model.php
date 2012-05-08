<?php
Class User_model extends CI_Model
{

    function _prep_password($password)
{
     return sha1($password.$this->config->item('encryption_key'));
}

function login($username, $password)
{
     $this->db->where('username', $username);
     $this->db->where('password', $this->_prep_password($password));

     $query = $this->db->get('users', 1);

     if ( $query->num_rows() == 1)
     {
         $result = $query->result();
         $row = $result[0];
           // set your cookies and sessions etc here
         $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
           return true;
     }

     return false;
}

function register($username, $password)
{
	$data = array('username' => $username, 'password' => $this->_prep_password($password));
	$this->db->insert('users', $data);
    return true;
}
}
?>
