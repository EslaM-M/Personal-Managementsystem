<?php
error_reporting(E_ALL ^ E_DEPRECATED);
/**
* 
*/
include 'Model/awebarts.php';
class Delete extends MainClass
{
	private $tablename;
	
	function __construct($tablename)
	{
		$this->tablename=$tablename;
		$this->ConnectToDb();
		# code...
	}

	function DeleteRecord($id){
		$id = intval($id);

	  	$query = "DELETE FROM  $this->tablename WHERE section_id ='$id'";
		if(!$sql = mysql_query($query)){
			throw new Exception("Error Record Not Deleted");
			
		}
		else
		{
			return true;
		}


	}
}
?>