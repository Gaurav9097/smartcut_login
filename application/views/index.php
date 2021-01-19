<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
  /*
    * Set Top Header  
  */
  require_once('top_header.php'); 

  /*
    * Set Header  
  */
 require_once('header.php'); 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assest/css/bootstrap.min.css');?>">

    <style>
      
      /*   
        *  set background image   
      */
      body {
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
        }

      </style>
</head>
<body background="<?php echo base_url('/assest/images/login_background.jpg');?>">
  <br/>

  <div class="offset-md-3 align-items-center col-md-6">
      <!--
        * Set Corner Rounded Box  
      -->
      <div class="shadow p-3 mb-4 bg-white rounded">
        <form action="<?php echo site_url('');?>" method="POST">
          <!--
            * Set Input of Email 
           -->
          <div class="form-group">
            <label for="txt_email"><b>Email</b></label> 
            <input type="text" name="txt_email" placeholder="abc@gmail.com" class="form-control">
            <?php echo "<span class='alert-danger'>".form_error('txt_email')."</span>"; ?> 
          </div>

          <!-- 
            * Set Input of Password
           -->
          <div class="form-group">
            <label for="txt_password"><b>Password</b></label>
            <input type="password" name="txt_password" class="form-control" placeholder="">
            <?php echo "<span class='alert-danger'>".form_error('txt_password')."</span>"; ?>
          </div>

          <!-- 
            * Set Forget Password Link
           -->
          <div align="right">
            <a herf="#"><input type="button" name="btn_forget_password" value="forget password?" class="btn btn-link"></a>
          </div>

          <!--
            * Set Login Button 
           -->
          <div>
            <center><input type="submit" name="btn_login" value="Login" class="btn btn-success form-control"></center>
          </div>

          <!--
            * Create User Account Link 
           -->
          <div>
            <center>
              <a href="#" class="btn btn-link">
                <span style="color:black;">Don't have an Account?</span>Register Now</a>
            </center>
          </div>

        </form>
      </div>
  </div>
</body>
</html>

<?php 
    /*
      * Connect or Set Footer
    */
    require_once('footer.php'); 
?>