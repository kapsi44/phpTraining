<?php 
    include('header.php'); 
    include_once '../model/UserProfile.php';
    $sign=new UserProfile();
    if(isset($_POST['submit'])) {
    $sign->checkUser();
    }
    ?>
<head>
    <title> Sign In </title>
</head>
<div class="site-wrapper">
<div class="site-wrapper-inner">
<div class="masthead clearfix">
    <center>
        <div class="inner">
            <h1 class="masthead-brand">GO</h1>
            <nav>
                <ul class="nav masthead-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="signup.php">Sign up</a></li>
                </ul>
            </nav>
        </div>
    </center>
</div>
<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email_id" name="email_id" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
    </form>
    <?php include('footer.php');?>
</div>
<!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/bootstrap/ie10-viewport-bug-workaround.js"></script>
</body>
</html>