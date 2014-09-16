
<?php
/**
* Display Data to mainsetting views
*/
include'awebarts.php';

class MainDisplay  extends MainClass
{
	private $tablename;
	public $newdata;
	
	function __construct($tablename)
	{
		  $this->tablename=$tablename;
		  $this->ConnectToDb();
		
		 
	}

	public function GetAllRecords()
	{
		$query = "SELECT * FROM $this->tablename ORDER BY  'section_id'";
		if(!$sql =mysql_query($query))
		{
			throw new Exception("Can't Execute Query");
		}
		else{
			$num = mysql_num_rows($sql);
			if($num >0)
			{
				for($i =0;$i<$num;$i++)
				{
					$data[$i]=mysql_fetch_array($sql);
				}
			}
		}
		return $data;
		# code...
	}
	function GetLastRecord(){
		//echo $this->tablename;
		$query = "SELECT * FROM main_settings ORDER BY  'id' desc limit 1";
		if(!$sql =mysql_query($query))
		{
			throw new Exception("Can't Execute Query");
		}
		else{
			   // print_r(mysql_fetch_array($sql));
			    $this->newdata = mysql_fetch_array($sql);
			    print_r($this->newdata);
			//    $data = $this->newdata;
		}
	//	return $data;
	}
	public function GetRecordById($id)
	{
		# code...
		$id2 = intval($id);
		echo $query ="SELECT *FROM  sections WHERE section_id=$id";
		if(!$sql = mysql_query($query))
		{
			throw new Exception("Canot execute Query");
			
		}
		else{
			 $num = mysql_num_rows($sql);
			if($num>0)
			{
				$data = mysql_fetch_array($sql);
				print_r($data);
			}

		}

return $data;
	}
}
?>