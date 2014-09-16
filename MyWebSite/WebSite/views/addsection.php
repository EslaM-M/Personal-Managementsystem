
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
.sectionTable th{color: #900; background: #ff9;}
</style>


<!--  add new sections -->
<form action="" class="mainsettingform add" method="post">
	<h1>Add New Sections</h1>

<label>Section Name:</label>
	<input type="text" name="section_name" placeholder="Please a section titel">
	<p>
	<label>Section State</label>
	<select name="sectionstate">
		<option value="active">Active</option>
		<option value="disactive">Dis Active</option>
	</select>
	</p>
	<p>
	<label>Section Location</label>
	<select name="sectionlocation">
		<option value="Side">Side</option>
		<option value="Body">Body</option>
	</select>
	</p>
	<label>Section Discription</label>
	<textarea name="sectiondesc" placeholder="please enter a section desc"></textarea>
<input class="btn-primary" type="submit" name="submit" value="submit">
</form>
<!---->
