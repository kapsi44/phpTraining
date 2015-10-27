<?php 
     
	include('header.php'); 
    include_once '../../Config/config.php';
     
		$user="";
    	$sign=new UserLogin();
    	$control = new Controller();
    	if(isset($_POST['submit'])) {
    		$email = $_POST['email_id'];
			$pass = $_POST['password'];
			$_SESSION['count']=1;
    		while($_SESSION['count']<4){
	    		if($sign->checkUser() === true) {
	    			//$_SESSION['email'] = $email;
	    			//$user=$_SESSION['email'];
					$control->render("userPage");
					exit;
	    		} else {
	    			$_SESSION['count']++;
	    			echo $_SESSION['count'];
	    			$sign->blockUser($email);
	    		}
	    		//$sign->blockUser($user);
    		}
    	}
    
	?>
<head>
    <title> Sign In </title>
</head>
<div class="site-wrapper">
<div class="site-wrapper-inner">
<div class="masthead clearfix" align="left">
                <div class="inner" >
                    <div class="masthead-brand"  style="margin-left:auto;"><img src ="../../Public/images/go1.png" width="15%" height="30%"></img>
                    <nav>
                        <ul class="nav masthead-nav" align="center">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="admin.php">Admin Login</a></li>
                            <li><a href="signup.php">Sign Up</a></li>
                        </ul>
                    </nav>
					</div>
				</div>
            </div>
<div class="container">
    <form class="form-signin" id="signinForm" method="POST" >
        <h2 class="form-signin-heading">Please Sign In</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email_id" name="email_id"  class="form-control" placeholder="Email address" minlength="5" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" minlength="4" required>
        <div class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
    </form>
    <?php include('footer.php');?>
</div>
<!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/bootstrap/ie10-viewport-bug-workaround.js"></script>
<script>
$("#signinForm").validate();
</script>
</body>
</html>