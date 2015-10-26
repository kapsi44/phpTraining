<?php
include_once '../../Config/config.php'; 

class AdminController extends Controller
{
	public function accessAdmin()
	{
		$con = new Controller;
		$adm = new AdminLogin();
		if ($adm->checkAdmin() === true) {
			$con->render ("adminPage");
		} else {
			echo "get last";
		}
	 }		
}
?>