<?php
/**
* 
*/
class MainClass
{
	
	private $cxn;
	public function ConnectToDb()
	{
		include 'DataBase.php';

        $vars = "include/vars.php";

        $this->cxn = new DataBase($vars);
	}
	function Close()
		{
			$this->cxn->close();
		}
}
?>