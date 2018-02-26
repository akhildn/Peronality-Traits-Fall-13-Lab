<?php
echo "<style>
img
{
height:200px;
width:200px;
float:left;
}
img:hover
{
opacity:0.4;
}
</style>";
	$link='';
	function retrievebooks($link,$dbname)
	{
	$sql="SELECT * from books";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			$bname=$row['b_name'];
			$bdesc=$row['b_desc'];
			//echo "BOOK NAME:".$bname;
			//echo "</br>";
			//echo "BOOK DESCRIPTION".$bdesc;
			//echo "</br>";
			$url=$row['b_link'];
			echo "<a href=\"$url\">";
			echo "<img src=image1_id.php?dbname=".$dbname."&bid=".$row['b_id']."/>";
                     
			//echo "<img src=image_id.php?bid=".$row['b_id']."&dbname=".$dbname."/>";
			echo "</a>";
			//echo "</br>";
		}
	}
	else
	{
	echo "query is not executed.";
	}
	}
?>					