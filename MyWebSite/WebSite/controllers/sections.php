
<h3>Sections</h3>
<h2><a href="?page=sections&action=add">Add New Section</a></h2>
<?php
if($_POST OR isset($_GET['action']))
{
	if(isset($_GET['action']) AND $_GET['action']=="add")
	{
		include'views/addsection.php';
	}
	if(isset($_POST['submit']) AND $_POST['submit']=="submit")
	{
		//echo "Ok";
		$newsectiondata['section_name']=$_POST['section_name'];
        $newsectiondata['section_state']=$_POST['sectionstate'];	
        $newsectiondata['section_location']=$_POST['sectionlocation'];
        $newsectiondata['section_desc']=$_POST['sectiondesc'];
        $newsectiondata['user_name']=$_SESSION['username'];
        $tablename="sections";
        try {
        	include'Model/mainadd.php';
        $addnewsec=	new MainAdd($newsectiondata,$tablename);
        if($addnewsec)
        {
        	echo '<script type="text/javascript">alert("The New Section Added");history.back(); </script>';
        }
        	
        } catch (Exception $e) {
        	
        	echo $e->getMessage();
        }
	}
	//////////////////////////Delete Sections//////////////////
	if (isset($_GET['action']) AND $_GET['action']=="delete") {
	try{
		include'/Model/Delete.php';
		$tablename = "sections";
		$id =$_GET['id'];
		 $result =  new Delete($tablename);
		 $result->DeleteRecord($id);
		}
		catch(Exception $ex)
		{
			echo $ex->getMessage();
		}
        
				# code...
	}
	if(isset($_GET['action']) AND $_GET['action']=="edit"){

       $id= $_GET['id'];
       $tablename="sections";
       include'Model/maindisplay.php';
       $editobj = new MainDisplay($tablename);
       $editrow = $editobj->GetRecordById($id);
    //   print_r($editrow);
	   include'views/editsection.php';
	}
}
else{

include'Model/maindisplay.php';

  $displayobj =  new MainDisplay("sections");


  $sectionsarray = $displayobj->GetAllRecords();
include 'views/sections.php';	# code...
}

?>