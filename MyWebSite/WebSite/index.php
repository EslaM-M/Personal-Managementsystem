<?php
session_start();
if(!isset($_SESSION['username'])){
	
	include'logincontroller.php';
	//include 'login.php';
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>aweberts</title>
<link rel="stylesheet" type="text/css" href="resources/css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css" type="text/css">
<script src="resources/js/bootstrap.min.js" type="text/javascript"></script>
<script src="resources/js/bootstrap.js" type="text/javascript"></script>


</head>
<body>
<div class="container">
<header><img src="resources/Images/logo.png" alt="welcome">

<h2>Welcome 
<?php
if(	isset($_SESSION['username']))
echo $_SESSION['username'];
echo "<a href='?page=logout'>Log Out</a>";
?>

</h2>
</header>

<div class="clear"></div>
<div class="contents">	
	<aside>
		<nav>
			<a class="btn-danger active" href="index.php">Home Page</a>
			<a class="btn-danger" href="?page=mainsettings">Main Settings</a>
			<a class="btn-danger" href="?page=sections">Sections</a>
			<a class="btn-danger" href="?page=pages">Pages</a>
			<a class="btn-danger" href="?page=comments">Comments</a>
			<a class="btn-danger" href="?page=library">Library</a>
		</nav>

	</aside>
	<section id="page">
		<?php
		if(isset($_GET['page'])){
			$url = "controllers/".$_GET['page'].".php";
			if (is_file($url)) {
				include $url;
			}
			else
			{
				echo "requested file not found";
			}

		}
		else{
			include './main.php';
		}


		?>
	</section>
</div>

<div  class="clear"></div>
<footer>
	<p>Copyright reserved - Eslam Mostafa</p>
</footer>
</div>
</body>
</html>