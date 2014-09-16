<?php
/**
* insert data to mysql database for main settings
*/
include'awebarts.php';
class MainAdd extends MainClass
{
	private $data;
	private $tablename;
	function __construct($data,$tablename)
	{
		# code...
		if(is_array($data))
		{
			$this->date=$data;
			$this->tablename=$tablename;
			
		}
	else{

		throw new Exception("Error Data Must Be Array");
		
		# code...
	   }
	   $this->ConnectToDb();
	   $this->AddData();
	   $this->CLose();

	}
	function AddData(){
		foreach ($this->date as $key => $value) {
			
			$keys[]=$key;
			$values[]=$value;
		}
	$tbkeys =implode($keys, ",");
	$datavalues='"'.implode($values,'","').'"';
	echo "<br>";
	echo  $datavalues;
	echo  "<br>";
	$query="INSERT INTO $this->tablename($tbkeys) VALUES ($datavalues)";

	if($sql =  mysql_query($query))
	{
		return true;
	}
	else
	{
		throw new Exception("Data Not Inserted in the database");
		
		return false;
	}

	}
}
?>