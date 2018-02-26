<?php
include 'db.php';
include 'retrievebooks.php';
function id_db($id)
{
$link='';
if($id==1)
{
$dbname="introvert";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==2)
{
$dbname="extrovert";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==3)
{
$dbname="intuitive";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==4)
{
$dbname="sensing";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==5)
{
$dbname="thinking";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==6)
{
$dbname="feeling";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==7)
{
$dbname="judging";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else if($id==8)
{
$dbname="perceiving";
$link=db_name($dbname,$link);
retrievebooks($link,$dbname);
}
else
{
echo "no case";
}
}
?>