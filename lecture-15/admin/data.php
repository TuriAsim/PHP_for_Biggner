<?php 
include("connection.php");
$value=$_REQUEST['title'];
$sql=mysql_query("select * from `news` where `title`='$value'");
$num=mysql_num_rows($sql);
if($num<1)
{
echo 0;
}
else
{
echo 1;
}
?>