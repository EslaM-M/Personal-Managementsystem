
<?php
if($_POST)
{
if(isset($_POST['submit'])&&$_POST['submit']=="update")
{

	$mainsettings['site_name']=$_POST['site_name'];
	$mainsettings['site_url']=$_POST['site_url'];
	$mainsettings['site_email']=$_POST['site_email'];
	$mainsettings['site_disc']=$_POST['site_disc'];
	$mainsettings['site_tags']=$_POST['site_tags'];
	$mainsettings['homepanel']=$_POST['homepanel'];
	$mainsettings['fb']=$_POST['fb'];
	$mainsettings['twitter']=$_POST['twitter'];
	$mainsettings['yt']=$_POST['yt'];
	$mainsettings['rss']=$_POST['rss'];
	$mainsettings['username']=$_POST['username'];

	
	try {
		
		include'Model/mainadd.php';
		$addMysettings = new MainAdd($mainsettings,"main_settings");
		if($addMysettings)
		{
			echo "Sucessfully Updated";
		}
	} catch (Exception $e) {
		
		echo $e->getMessage();
	}
	

}
}
else{
	 try {
	 	
	 	 include 'Model/maindisplay.php';
	 	 $displayobj  = new MainDisplay("main_settings");
	     $displayobj->GetLastRecord();
	 	 $datadis =  $displayobj->newdata;
	 	 echo $datadis['site_name'];
	 //	 print_r($datadis);

	 } catch (Exception $e) {
	 	echo $e->getMessage();

	 }
	include'views/viewmainsettings.php';
}

?>