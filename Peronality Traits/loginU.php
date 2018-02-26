<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
<link rel=stylesheet href="settings.css" type="text/css">
</head>
<body>
<div id="header">
	<div id="LB">
	<a href="index.html"><img src="logo.jpg" title="logo" height="130" width="256"> </a> 
	</div>
 	<div id="title">
	<a href="index.html" style="text-decoration: none">
        <font color="#9CF">	
    			<h1> Character Analysis </h1>
        </font>    
        </a>
	</div>

<section id="main_box">
	<div id="left_box">
	</br>
        </br>
        </br>
	</br>
        <a href="index.html"><button type="button" style="width:100%" style="height:30%">log out</button></a>
	</div>
</section>
	<section id="page">	 
  		<div id="boxleft">  
         <a href="test.html" style="text-decoration:none "><img src="whoru.jpg" title="personality test" height="400" width="350"/></a>  
 		 </div>
         
  		<div id="boxRegister">
      	<a href="bookanalysis.html" style="text-decoration:none "><img src="book.jpg" title="know which books u want" height="400" width="350"/></a> 
  		</div> 
      	</section>   
</body>
</html>
<?php
error_reporting(E_WARNING);

$myuser = $_POST['login'];
$mypass= $_POST['password'];

if (empty($myuser) || empty($mypass)) 
{
	echo "<script>alert('empty fields not allowed')</script>";
	echo "<script>location.href='login.html'</script>";
	die();
}
$con = mysqli_connect("localhost","root","","login");
$q="select * from users where email ='$myuser' and password='$mypass'";
$result = mysqli_query($con,$q);
$q="select name from users where email ='$myuser' and password='$mypass'";
$name = mysqli_query($con,$q);
if($name)
{
while(  $row=mysqli_fetch_array($name))
{
	echo "".$row["name"];   
	echo "<script>location.href='main.html?userid=$name'</script></a>";
	
}
}

 else
 {
	  echo "<script>alert('invaild login')</script>";
	  echo "<script>location.href='login.html'</script>"; 
 } 

?>
