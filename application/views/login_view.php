<?php echo validation_errors(); ?>
  <?php echo form_open('verifylogin'); ?>
    <label for="username">Username:</label>
    <input type="text" size="20" id="username" name="username"/>
    <br/>
    <label for="password">Password:</label>
    <input type="password" size="20" id="password" name="password"/>
    <br/>
    <input type="submit" value="Login"/>
  </form>

        <div id="signup"><p> Not registered? <a href="index.php/login/signup">Sign up!</a></p></div>

 
