<?php
//include_once 'connect.php';
include_once '../controller/signup_controller.php';
//include_once '../view/register.php';

class Register
{
    
    
    
    public function __autoload($class)
    {
        if (file_exists("includes/{$class}.php")) {
            include_once("includes/{$class}.php");
        } else {
            "File doesn't exist";
        }
    }
    
    public function __set($name, $value)
    {
        $this->$name = $value;
        return $sign;
    }
    
    public function __get($name)
    {
        return $this->$name;
    }
    
    function __construct()
    {
        //include_once '../controller/variables.php';
    }
    // public $error = array('errorType' => FALSE, 'errorMsg' => "");
    
    const MIN = 3;
    const MAX = 30;
    
    public function validate()
    {
        
        $sign             = new SignupController();
        $sign->first_name = $_POST['fn'];
        $sign->last_name        = $_POST['ln'];
        $sign->user_name        = $_POST['username'];
        $sign->mobile           = $_POST['mobile'];
        $sign->gender           = $_POST['gender'];
        $sign->day              = $_POST['day'];
        $sign->year             = $_POST['year'];
        $sign->month            = $_POST['month'];
        $sign->blood_group      = $_POST['bloodGroup'];
        $sign->password         = $_POST['password'];
        $sign->confirm_password = $_POST['confirmPassword'];
        $sign->email            = $_POST['email'];
        $sign->age              = date('Y') - $sign->year;
        
        $error = array(
            'errorType' => false,
            'errorMsg' => ""
        );
        if (!ctype_alnum($sign->user_name)) {
            echo $sign->user_name;
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should have alphnumeric characters";
            echo $error['errorMsg'];
        } elseif (strlen($sign->user_name) < self::MIN OR strlen($sign->user_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should be within 3-20 characters long";
            echo $error['errorMsg'];
        } elseif (!ctype_alpha(str_replace(array(
            "'",
            "-"
        ), "", $sign->first_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be alpha characters only.";
            echo $error['errorMsg'];
        } elseif (strlen($sign->first_name) < self::MIN OR strlen($sign->first_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be within 3-20 characters long";
            echo $error['errorMsg'];
        } elseif (!ctype_alpha(str_replace(array(
            "'",
            "-"
        ), "", $sign->last_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be alpha characters only.";
            echo $error['errorMsg'];
        } elseif (strlen($sign->last_name) < self::MIN OR strlen($sign->last_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be within 3-20 characters long.";
            echo $error['errorMsg'];
        } elseif (strlen($sign->password) < self::MIN OR strlen($sign->password) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Password should be within 3-20 characters long.";
            echo $error['errorMsg'];
        } elseif ($sign->confirm_password != $sign->password) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Confirm password mismatch.";
            echo $error['errorMsg'];
        } elseif (!filter_var($sign->email, FILTER_VALIDATE_EMAIL)) { // you can also use regex to do same
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid email address.";
        } elseif (!ctype_digit($sign->mobile) OR strlen($sign->mobile) != 10) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid phone number.";
            echo $error['errorMsg'];
        } elseif ($sign->gender != 'male' && $sign->gender != 'female') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your gender.";
            echo $error['errorMsg'];
        } elseif ($sign->blood_group == '') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your blood group.";
            echo $error['errorMsg'];
        } elseif (intval($sign->day) < 1 OR intval($sign->day) > 31) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid day between 1-31.";
            echo $error['errorMsg'];
        } elseif ($sign->month = '') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid month between 1-12.";
            echo $error['errorMsg'];
        } elseif ($sign->age < 18) {
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