<div id="container"><p> här kan du skriva in allt du måste...</p></div>
 
<?php echo validation_errors(); ?>
  <?php echo form_open('verifysignup'); ?>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username"/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <input type="submit" value="Login"/>
  </form>