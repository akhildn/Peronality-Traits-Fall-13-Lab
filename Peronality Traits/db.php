<?php
  function db_name($dbname,$link)
{
  $host='localhost';
  //Change the user,password and database variables as desired
  $user='root';
  $pass='';
  		
  $link=mysqli_connect($host,$user,$pass,$dbname) or die(mysqli_connect_errno());
  return $link;
}	
?>