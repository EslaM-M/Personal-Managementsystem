<?php

/**
* 
*/
class Login 
{
	private $username;
	private $password;
	private $cxn;
	function __construct($username,$password)
	{
		$this->SetData($username,$password);
       ///////////////Connect to db//////////////////
        $this->ConnectToDb();
		///get data
		$this->GetData();

	}
	private function SetData($username,$password)
	{

     $this->username=$username;
     $this->password=$password;
	}
	private function ConnectToDb()
	{
		include 'DataBase.php';

        $vars = "include/vars.php";

        $this->cxn = new DataBase($vars);
	}

	private function GetData()
	{
		$query = "SELECT * FROM  users where user_name = '$this->username' AND password = '$this->password'";
		$sql = mysql_query($query);

		$users= mysql_num_rows($sql);
		if($users>0)
		{
			echo  $users;
            return true;
		}
		else{
              throw new Exception("UserName Or Password is invalid");
              
		}

	}
	  function Close()
		{
			$this->cxn->close();
		}

}
?>