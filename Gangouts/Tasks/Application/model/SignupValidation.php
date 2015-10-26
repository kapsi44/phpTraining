<?php
include_once '../view/signup.php';
include_once '../../Config/config.php';

class SignupValidation
{
    private $email = "";
    private $user_name = "";
    private $first_name = "";
    private $last_name = "";
    private $mobile = "";
    private $gender = "";
    private $day = "";
    private $month = "";
    private $year = "";
    private $dob = "";
    private $age = "";
    private $blood_group = "";
    private $password = "";
    private $confirm_password = "";    
	public function __set($name, $value)
    {
        $this->name = $value;
        
        return $this;
    }    
    public function __get($name)
    {
        return $this->$name;
    }     
    const MIN = 3;
    const MAX = 30;
    
    public function validate()
    {
        $this->first_name = $_POST['firstname'];
        $this->last_name = $_POST['lastname'];
        $this->user_name = $_POST['username'];
        $this->mobile = $_POST['mobile'];
        $this->gender = $_POST['gender'];
        $this->day = $_POST['day'];
        $this->year = $_POST['year'];
        $this->month = $_POST['month'];
        $this->blood_group = $_POST['bloodGroup'];
        $this->password = $_POST['password'];
        $this->confirm_password = $_POST['confirm_Password'];
        $this->email = $_POST['email'];
        $this->age = date('Y') - $this->year;
        $error = array(
            'errorType' => false,
            'errorMsg' => ""
        );
        if (!ctype_alnum($this->user_name)) {
            echo $this->user_name;
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should have alphnumeric characters";
            echo $error['errorMsg'];
        } elseif (strlen($this->user_name) < self::MIN OR strlen($this->user_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should be within 3-20 characters long";
            echo $error['errorMsg'];
        } elseif (!ctype_alpha(str_replace(array(
            "'",
            "-"
        ), "", $this->first_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be alpha characters only.";
            echo $error['errorMsg'];
        } elseif (strlen($this->first_name) < self::MIN OR strlen($this->first_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be within 3-20 characters long";
            echo $error['errorMsg'];
        } elseif (!ctype_alpha(str_replace(array("'","-"), "", $this->last_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be alpha characters only.";
            echo $error['errorMsg'];
        } elseif (strlen($this->last_name) < self::MIN OR strlen($this->last_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be within 3-20 characters long.";
            echo $error['errorMsg'];
        } elseif (strlen($this->password) < self::MIN OR strlen($this->password) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Password should be within 3-20 characters long.";
            echo $error['errorMsg'];
        } elseif ($this->confirm_password != $this->password) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Confirm password mismatch.";
            echo $error['errorMsg'];
        } elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) { // you can also use regex to do same
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid email address.";
        } elseif (!ctype_digit($this->mobile) OR strlen($this->mobile) != 10) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid phone number.";
            echo $error['errorMsg'];
        } elseif ($this->gender != 'male' && $this->gender != 'female') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your gender.";
            echo $error['errorMsg'];
        } elseif ($this->blood_group == '') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your blood group.";
            echo $error['errorMsg'];
        } elseif (intval($this->day) < 1 OR intval($this->day) > 31) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid day between 1-31.";
            echo $error['errorMsg'];
        } elseif ($this->month = '') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid month between 1-12.";
            echo $error['errorMsg'];
        } elseif ($this->age < 18) {
            $error['errorType'] = true;
            $error['errorMsg']  = "You should be at least 18 years old.";
            echo $error['errorMsg'];
        } elseif ($error['errorType'] === false) {
            return true;
        } else {
            return false;
        }
    }
}
?>
