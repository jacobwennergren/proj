<html>
<head>
    <base href="<?php echo base_url(); ?>" />
    <LINK REL=StyleSheet HREF="stylesheets/style.css" TYPE="text/css">
	<title><?php echo $title ?> - CodeIgniter 2 Tutorial</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/all.js"></script>
</head>
<body>
<strong>HEADER!</strong>
<div id="login_container">
    <?php
    if($this->session->userdata('logged_in')){
    $userdata = $this->session->userdata('logged_in');
        echo 'logged in as: '.$userdata['username'];
        ?>
       <div>
       <button type="button" onclick="logout()">Log out</button>
      </div>

    <?php
    } else {
    echo '<a href="index.php/login">log in</a> ';
}


    ?></div>
<div>
   <form id="searchform">
      <div>
         Search: <input type="text" size="30" value="" onkeyup="lookup(this.value);" />
      </div>
      <div id="suggestions"></div>
   </form>
</div>