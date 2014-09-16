<?php


error_reporting(E_ALL ^ E_DEPRECATED);

/*
 *@author Ess

*/
class DataBase
{
	private $host;
    private $user;
    private $password;
    private $database;

    function __construct($filename)
    {
    	if(is_file($filename)){

    		include $filename;

    	}
    	else throw new Exception("Error Processing Request");


        	$this->host=$host;
          	$this->user=$user;
            $this->password=$password;
    	    $this->database=$database;
            $this->Connect();

    }

/**
 * 
 */
    private function Connect()
    {

    	//////////connect to server
    	if(!mysql_connect($this->host,$this->user,$this->password))
             throw new Exception("Error Not Connected To The Server");

        ////select the database
         if(!mysql_select_db($this->database))
         	throw new Exception("Error No Database Connected");
    }
     function close()
     {
     	mysql_close();
     }
}

?>