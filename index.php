<?php session_start();  ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Assignment </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style type="text/css">
  
.header-name{
      border-top-right-radius: 10px;
 
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
<body style="background-image: url(images/local.jpg);">







  <div class="header header-name">
  	<h2 style="  font-size: 45px;">Login</h2>
  </div>
	 
  <form method="post" action="index.php">
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input class="input-class" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input class="input-class" type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>