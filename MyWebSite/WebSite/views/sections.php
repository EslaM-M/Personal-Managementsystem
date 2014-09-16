
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
.add h1{
	font-family: cursive;
	font-size: 16px;
	border-bottom: 1px dashed #ddd;
	margin-bottom: 15px;
}
.add input[type="submit"]{margin: 50px, 250px}
.sectionTable{ width: 700px;float: left;}
.sectionTable th{color: #900; background: #ff9;}
.sectionTable td img {max-height: 24px; margin: 3px;}
</style>

<table class="table table-hover table-bordered sectionTable">
	<tr class="danger">
	<th>Id</th>
	<th>Section Name</th>
	<th>Status</th>
	<th>Location</th>
	<th>Section Desc</th>
	<th>Date</th>
	<th>Created By</th>
	<th></th>
	</tr>
	<?php
for($i =0;$i<count($sectionsarray);$i++)
{

	echo"

	<tr>
		<td>{$sectionsarray[$i]['section_id']}</td>
		<td>{$sectionsarray[$i]['section_name']}</td>
		<td>{$sectionsarray[$i]['section_state']}</td>
		<td>{$sectionsarray[$i]['section_location']}</td>
		<td>{$sectionsarray[$i]['section_desc']}</td>
		<td>{$sectionsarray[$i]['section_date']}</td>
		<td>{$sectionsarray[$i]['user_name']}</td>
		<td>
			
		<a href='?page=sections&action=delete&id={$sectionsarray[$i]['section_id']}'>	<img src='resources/images/edit.png'></a>
		<a href='?page=sections&action=edit&id={$sectionsarray[$i]['section_id']}'>	<img src='resources/images/delete.png'></a>
		</td>

	</tr>

	";
}


	?>


</table>