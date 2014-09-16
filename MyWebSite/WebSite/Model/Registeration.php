<?php
/**
* 
*/
class Register
{
	private $name;
	private $username;
	private $email;
	private $password;
	private $cxn;
	//`user_id`, `user_name`, `password`, `email`, `name`
	function __construct($name,$username,$email,$password)
	{
		
	//	if(is_array($data))
	//	{
		//	print_r($data);
             $this->SetData($name,$username,$email,$password);
	//	
		$this->ConnectToDb();
		$this->registerUser();


	}

	private function ConnectToDb()
	{
		include 'DataBase.php';

        $vars = "include/vars.php";

        $this->cxn = new DataBase($vars);
	}

	private function SetData($name,$username,$email,$password)
	{

	$this->name =  $name;
	$this->username = $username;
	$this->email = $email;
	$this->password = $password;
	}

	function registerUser(){
		$query ="INSERT INTO  users (user_id, user_name, password, email, name)


		 VALUES('','$this->username','$this->password','$this->email','$this->name')";
		 $sql = mysql_query($query);
		 if($sql)
		 {
		 	echo "Good";
		 }
		 else{
		 	throw new Exception("Error Processing Request");
		 	
		 }

	}
	function close(){
		$this->cxn->close();
	}
}


?>