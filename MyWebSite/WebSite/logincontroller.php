<?php

/*  Login Controller*/

if($_POST)
{
	if(isset($_POST['submit']) AND $_POST['submit']=="login")
		{

	    	$username =	$_POST['username'];
            $password = $_POST['password'];

         try {
         	include './Model/Login.php';
            $userlogin = new Login($username,$password);
            if($userlogin==true)
            {
            	session_start();
            	$_SESSION['username']=$username;
            	header('Location:index.php');
            }
         } 

         catch (Exception $e) {
         	echo $e->getMessage();
         	
         }


     }
     if(isset($_POST['submit']) AND $_POST['submit']="register")
     {
    $name= $_POST['name'];
    $username= $_POST['username'];
    $email=  $_POST['email'];
    $password= $_POST['password'];

        //  print_r($data);
     	//$register = new 
          include './Model/Registeration.php';
         $register = new Register($name,$username,$email,$password);

     }

 }
 else{

 	include'login.php';
 }
?>