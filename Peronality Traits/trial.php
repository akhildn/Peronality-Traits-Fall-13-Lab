<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
<link rel=stylesheet href="trial.css" type="text/css">
<style>
body
{
background-color:#9CF;       
}
p
{
font-color:black;
}
#frame1,#frame2,#frame3,#frame4
{
width:1035;
height:495;
position:absolute;
top:162px; 
right:3px;
text-align:left;
background-color:#9CF;  
}
</style>
</head>
<body>
<form action="analysis.php" method="post">
	
<section id="main_box">
	<div id="left_box">
	<div id="LB">
	<a href="index.html"><img src="logo.jpg" title="logo" height="100" width="150"> </a> 
	</div>
	</br></br></br>
	</br></br></br>
	<div id="content">
	
        <a href="index.html"><button type="button" style="width:100%" style="height:30%">log out</button></a>
	</div>
	</div>
<div id="right_box">
<?php
include 'select_db.php';
if(isset($_POST["submit"]))
{
	$count=0;
	$answers=array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],$_POST['q6'],$_POST['q7'],$_POST['q8'],$_POST['q9'],$_POST['q10'],$_POST['q11'],$_POST['q12'],$_POST['q13'],$_POST['q14'],$_POST['q15'],$_POST['q16'],$_POST['q17'],$_POST['q18'],$_POST['q19'],$_POST['q20'],$_POST['q21'],$_POST['q22'],$_POST['q23'],$_POST['q24'],$_POST['q25'],$_POST['q26'],$_POST['q27'],$_POST['q28'],$_POST['q29'],$_POST['q30'],$_POST['q31'],$_POST['q32'],$_POST['q33'],$_POST['q34'],$_POST['q35'],$_POST['q36']);
	for($i=0;$i<9;$i++)
	{
		if($answers[$i]==1)
		{
			$count=$count+1;
		}
	}
	if($count>4)
	{
	$id=1;
	echo id_db($id);
	}
	else
	{
	$id=2;
	echo id_db($id);
	}
	$count1=0;
	echo "2ND analysis";
	for($i=9;$i<18;$i++)
	{
	
		if($answers[$i]==1)
		{
		$count1=$count1+1;
		}
	}
	if($count1>4)
	{
	$id=3;
	echo id_db($id);
	}
	else
	{
	
	$id=4;
	echo id_db($id);
	}
	$count2=0;
	for($i=19;$i<27;$i++)
	{
		if($answers[$i]==1)
		{
		$count2=$count2+1;
		}
	}
	if($count2>4)
	{
	$id=5;//thinking
	echo id_db($id);
	}
	else
	{
	$id=6;//feeling
	echo id_db($id);
	}
	$count3=0;
	for($i=28;$i<36;$i++)
	{
		if($answers[$i]==1)
		{
		$count3=$count3+1;
		}
	}
	if($count3>4)
	{
	$id=7;//judging
	echo id_db($id);
	}
	else
	{
	$id=8;//perceiving
	echo id_db($id);
	}
}
?>
</div>
</section>
</form>
</body>
</html>