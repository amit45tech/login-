<?php session_start();  ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Assignment  </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style type="text/css">

.header-name{
      border-top-right-radius: 10px;
   ;
    background: #88b716a1;
    width: 30%;
    
    margin: auto;
    height: 100px;
   
    border-top-left-radius: 10px;
    text-align: center;
    padding-top: 16px;
        margin-top: 80px;
  
}
.input-class{
  width: 208%;

}

</style>

</head>
<body style="background-image: url(images/signup.jpg);">





  <div class="header header-name">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input class="input-class" type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input class="input-class" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input class="input-class" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input class="input-class" type="password" name="password_2">
  	</div>

    <div class="form-group">
        <input id="accept_conditon_pop"  name="accept_conditon" type="checkbox" value="1" required=""> <!--Accept terms &amp; condition.-->
        I agree to the 
        <a class="teram_click" data-item-href="#tab1" href="#">Terms of Service</a> and 
        <a class="teram_click" data-item-href="#tab2" href="#">Privacy Policy</a>
        <br>
        <span id="condition-info" class="error-content"></span>
        </div>


  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="index.php">Sign in</a>
  	</p>
  </form>
</body>
</html>