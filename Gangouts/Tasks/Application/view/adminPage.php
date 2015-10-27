<?php
include_once 'header.php';
include_once '../../Config/config.php';
session_start();
$disp = new AdminLogin();
$array = $disp->displayUsers();
$access = new AdminController();
$user = new AdminLogin();
$user->displayUsers();
if(isset($_POST['btn'])) {
	echo "buton clickd";
	$_SESSION['em'] = $row['email'];
	$user = $_SESSION['em']; 	
	$access->unblockUser($user);
}
?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gangouts</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">City Users</a></li>
            <li><a href="">Recently Registered</a></li>
            <li><a href="">Blocked Users</a></li>
            <li><a href="">Pending Users</a></li>
            <li><a href="">Help & Support</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Logout</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../Public/images/fc4.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Gangouts</h4>
              <span class="text-muted">Groups</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../Public/images/fc1.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Gangouts</h4>
              <span class="text-muted">Friends</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../Public/images/fc3.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Gangouts</h4>
              <span class="text-muted">Video Calls</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../../Public/images/fr1.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Gangouts</h4>
              <span class="text-muted">Chats</span>
            </div>
          </div>
			<?php 
				$user = new AdminLogin();
				$user->displayUsers();
				?>
           <form method="POST">
		  <h2 class="sub-header">Registered Users</h2>
          <div class="table-responsive">
            <table class="table table-striped" border="1"  style="margin: 0 auto;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>User Name</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Gender</th>
				  <th>Status</th>	
				  <th>Action</th>		
				</tr>
              </thead>
              <tbody>
                <tr>
				<?php
					if( mysqli_num_rows( $array )==0 ){
						echo '<tr><td colspan="4">No Rows Returned</td></tr>';
					} else {
                         while( $row = mysqli_fetch_assoc( $array ) ){
                            echo 
							"<tr>
								<td>{$row['id']}</td>
								<td>{$row['first_name']}</td>
								<td>{$row['user_name']}</td>
								<td>{$row['email']}</td>
								<td>{$row['gender']}</td>
								<td>{$row['status']}</td>
								<td><input type='submit' name='btn' value='Unblock'/></td>
							</tr>\n";
                        }
					  }
					?>
              </tbody>
            </table>
          </div>
		  </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
