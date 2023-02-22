<?php
session_start();
 include 'includes/header2.php'; 
 if(isset($_SESSION['UID']))
 header('location:pages/index.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>

*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}	
.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}
.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}
.menu{
    width: 400px;
    float: left;
    height: 70px;
}
ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}
ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}
ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}
.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}
.description {
  color: #fff;
}

.description em {
  color: #ffa500;
}


	#main-bod{
		    background: url(images/construction-cover.jpg);
		    background-repeat: no-repeat;
			background-size: cover;
			display:flex;
			height:calc(100%);
			width:calc(100%);
			align-items:center;
			justify-content:center;
			top: 0;
			margin:unset

	}
</style>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Rail PMS</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="http://localhost/project%20management%20system/includes/PMS.html">PMS CONCEPT</a></li>
                    <li><a href="https://www.linkedin.com/in/rohit-suman-496869a0/">CONTACT</a></li>
                </ul>
            </div>

        </div>
        <div class="content">
	   <div class="col-lg-7">
            <h1 class="description">Project Management System</h1>
            <p class="description">This is the demo of how project handled in a railway manufacturing company. </p>
		<div class="gallery">
  <a>
    <img src="http://localhost/project%20management%20system/images/Project Management Process Breakdown.png" alt="Cinque Terre" width="600" height="400">
  </a>

  
</div>
	  </div>

<body id="main-bod">
		<div class="col-lg-4">
				<div class="panel panel-info" style="">
				<div class="panel-heading">
					Login
				</div>

				<div class="panel-body">
					 
					 <div class="container-fluid">
					 <form class="form-horizontal" method="POST" id="login_form">
					 <body>
        			<div class="content">

					 <h6><center><strong><u>Welcome to Project Management System</u></strong></center></h6>

					 <hr>

					 <p1><center><strong><i>Admin Login Credentials for DEMO purpose</i></strong></center></p1>
						<p><center>Username : padmalaya<br>
						Password : padmalaya</center></p>
					 <p1><center><strong><i>User Login Credentials for DEMO purpose</i></strong></center></p1>
						<p><center>Username : rohit<br>
						Password : rohit</center></p>


					 </body>


									<div class="form-group" id="form-login">
										<label for="" class="control-label">Username</label>
										<input class="form-control" id="user" name="user" type="text">
									</div>
									<div class="form-group">
										<label for="" class="control-label">Password</label>
										<input type="password" name="pass" id="pass" class="form-control">
									</div>
									<div class="form-group" id="msg">
									<div class="col-sm-8 col-sm-offset-8">
									<button type="submit" class="btn btn-info">Login</button> <br>
									</div>

									<div class="col-sm-12">
										<div class="alert alert-success" id="correct"> Successfully Log in!</div>
										<div class="alert alert-danger" id="error"> Error Log in </div>
									</div>
									</div>
								
									
								</form>
					 </div>         	
					        
				</div>
			</div>
		</div>
</body>
<script>
		jQuery(document).ready(function(){
					jQuery(document).ready(function(){
						$("#correct").hide();
						$("#error").hide();
						jQuery("#login_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "includes/login.php",
									data: formData,
									success: function(html){
									if(html=='true' )
									{
										$('#error').hide();
										$("#correct").slideDown();
										var delay = 2000;
										setTimeout(function(){	window.location = 'pages/index.php?page=home';   }, delay);  
									}else{
									$('#error').slideDown();	
										var delay = 2000;
										setTimeout(function(){	$('#error').slideUp();  }, delay);  
									}
									}
								});
									return false;
						});
						});
						});
	
</script>