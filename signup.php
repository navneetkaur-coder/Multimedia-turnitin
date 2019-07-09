<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<script src="js/bootstrap.min.js" type="application/javascript">

</script>

<title>Music Store</title>
<style>
body{
	color : white;
}
.back{

width:100%;	
}
body{
background-color:#000;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;	
}
.nav-link{
color:#FFF;	
}
h1, h2,h3, h4, h5, h6{
color:white;	

}
</style>

</head>


<body>

<div class="container-fluid">
<div class="row">

<div class="col-lg-2 col-sm-2">
<img src="image/logo.svg" /> <br />

</div>

<div class="col-lg-7 col-sm-7">
<nav class="nav nav-fill navbar-dark float-right">
  <a class="nav-link active" href="index.php">Home</a>
  
  <a class="nav-link" href="signup.php">Sign In / Sign Up</a>

</nav>

</div>
</div>
<div class="container"> 
<br><br>
<div class="row container">


<div class="form-control col-4">

<h1 class="text-center"  style="color:white; background-color:black;">SignIn Form</h1>
<form action="signin_code.php" method="post">
Email <input type="email" class="form-control" name="email" />
Password <input type="password" class="form-control" name="password" />
<input type="submit" class="btn btn-danger my-2" value="Sign In" />
</form>
 </div>

<div class="col-2">

</div>
 
<div class="form-control col-6">
<h1 class="text-center" style="color:white; background-color:black;">Fill SignUp Form</h1>

<form action="signup_code.php" method="post">
First Name <input type="text" class="form-control" name="fname" />
Last Name <input type="text" class="form-control" name="lname" />
Email <input type="email" class="form-control" name="email" />
Password <input type="password" class="form-control" name="password" />
Account Type <input type="radio" name="r1" value="moderator" /> Moderator <input type="radio" name="r1" value="user" /> User <br /> 
Mobile <input type="text" class="form-control" name="mobile" />

<input type="submit" class="btn btn-danger my-2" value="Sign Up" />
</form>
 </div>
</div>
</div>

<div class="card-footer">

<div class="row">
<div class="col-12">
<center>
<img src="image/logo.svg" />

<h6>All rights reserved.</h6>
</center>
</div>
</div>
</div>

</body>
</html>
