<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
function Interfacee($text,$color,$size)
{
	echo "<p style='color:".$color.";font-size:".$size."'>".$text."</p>";
}
Interfacee("eslammostafa","red","50px");


$raiwcolor = array("red","orange","green","blue");
$secondarray[]=1;
$secondarray[]=2;
$secondarray[]=3;
/*Associative array*/

/*$characher = array(
	"name"=>"mohamed",
	"Job"=>"engineeer",
	"age"=>20,
	"company"=>"hello egypt"
	);
echo $characher["name"];*/

/*foreach ($raiwcolor as $value) {
	echo $value."<br>	";
	# code...
}*/

$employee = array(
 array(
	"name"=>"mohamed",
	"Job"=>"engineeer",
	"age"=>20,
	"company"=>"hello egypt"
	),
  array(
	"name"=>"eslam",			
	"Job"=>"doctor",
	"age"=>20,
	"company"=>"egypt"
	),
   array(
	"name"=>"mido",
	"Job"=>"Local",
	"age"=>20,
	"company"=>"Local egypt"
	)	
	);
//echo $employee[1]["name"];
/*
for ($i=0; $i < count($employee); $i++) { 
	echo $employee[$i]["name"]."<br>";
	echo $employee[$i]["Job"]."<br>";
	echo $employee[$i]["age"]."<br>";
	echo $employee[$i]["company"]."<br>";

	# code...
}*/
/*
foreach ($employee as $key => $value) {
foreach ($value as $key => $value) {
  echo $key."is".$value."<br>";
}
}*/
/**
* 
*/
class AirPort 
{
	

	//Properties
	public $owner = "eslam";
	public $passenger_capacity ="20";
	public $gaz = "100";
	/////////////Methods//////////////
	function GetData()
	{
		echo $this->owner;
		echo $this->passenger_capacity;
		echo $this->gaz;
	}
	function SetData($owner,$passenger_capacity,$gaz)
	{
		$this->owner =  $owner;
		$this->passenger_capacity =  $passenger_capacity;





		$this->gaz =  $gaz;

	}
}
$plane = new AirPort();
$plane->SetData("mido","1000","100");	
$plane->GetData();


  ?>
</body>
</html>