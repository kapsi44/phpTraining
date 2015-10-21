<?php 
    include('header.php');
    ?>
<head>
    <title>Admin Log In </title>
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
                    <li><a href="signin.php">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </center>
</div>
<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="adminId" class="sr-only">Admin Id</label>
        <input type="email" id="adminId" class="form-control" placeholder="Admin Id" required autofocus>
        <label for="adminPassword" class="sr-only">Password</label>
        <input type="password" id="adminPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <?php include('footer.php');?>
</div>
<!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>