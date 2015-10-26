
<?php
include_once '../../Config/config.php';

class SignupController extends Controller
{
    public function signupAction()
    {   
    	$con = new Controller();
        $reg = new SignupValidation();
        $user = new UserDetails();
        if ($reg->validate() === true) {
            if($user->insertUser() === true && $user->insertUserMobile() === true) {
               $con->render('userPage');
            } else {
			   $con->render("fail");
		    }
        }
        
    }
}
?>