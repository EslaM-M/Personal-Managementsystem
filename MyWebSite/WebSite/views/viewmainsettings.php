<h3>Main Settings</h3>
<style type="text/css">
	
.mainsettingform{

	width: 400px;
	float: left
}
.mainsettingform label{
	float: left;
	width: 150px;

}
.mainsettingform input{
	width: 250px;
	height: 30px;
	padding: 3px 5px;
	border: 1px solid #999;
	border-radius: 5px;
	display: block;
	margin: 10px;
}
.mainsettingform textarea{
	width: 250px;
	border-radius: 5px;
	border: 1px solid #999;
	height: 90px;
	margin-bottom: 10px;
}
.mainsettingform input[type="submit"]{height: 40px; text-align: center; margin: 20px, 150px;}
.contents{
	overflow: hidden;
}

</style>


<form action="" method="post" class="mainsettingform">
<!--
`site_name`, `site_url`, `site_disc`, `site_email`, `site_tags`, `homepanel`, `fb`, `twitter`, `yt`, `rss`
-->
<label>Site Name</label>
<input type="text" name="site_name" value='<?php echo  $datadis['site_name'];?>'>
<label>Site URL</label>
<input type="text" name="site_url" value="<?php echo  $datadis['site_url'];?>">
<label>Site Email</label>
<input type="email" name="site_email" value="<?php echo  $datadis['site_email'];?>">
<label>Site Description</label>
<textarea name="site_disc" value><?php echo  $datadis['site_disc'];?></textarea>
<label>Site Tags</label>
<textarea name="site_tags"><?php echo  $datadis['site_tags'];?></textarea>
<label>Home Panal Notes</label>
<textarea name="homepanel"><?php echo  $datadis['homepanel'];?></textarea>
<label>FaceBook Link</label>
<input type="text" name="fb" value="<?php echo  $datadis['fb'];?>">
<label>Twitter Link</label>
<input type="text" name="twitter" value="<?php echo  $datadis['twitter'];?>">
<label>YouTube Link</label>
<input type="text" name="yt" value="<?php echo  $datadis['yt'];?>">
<label>Rss Link</label>
<input type="text" name="rss" value="<?php echo  $datadis['rss'];?>">
<input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">
<input class="btn-lg btn-primary" type="submit" name="submit" value="update">
</form>