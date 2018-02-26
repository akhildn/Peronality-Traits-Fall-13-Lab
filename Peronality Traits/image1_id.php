<?php
include 'db.php';
	$link='';
	$dbname=$_GET['dbname'];
	$link=db_name($dbname,$link);
	$b_id=$_GET['bid'];
	
	$sql="SELECT b_image,img_type from books where b_id='$b_id'";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		$row=mysqli_fetch_array($result);
		$type="content-type:".$row['img_type'];
		header($type);
		echo $row['b_image'];
	}
	else
	{
	echo "no";
	mysqli_error();
	}
?>
