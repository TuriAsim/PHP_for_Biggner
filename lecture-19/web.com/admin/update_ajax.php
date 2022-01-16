<?php 
include("connection.php");
$id=$_REQUEST['ids'];
$title=$_REQUEST['tit'];
$des=$_REQUEST['des'];
$sql=mysql_query("update `news` set `title`='$title',`news`='$des' where `id`='$id'");
if($sql)
{
echo 1;
}
else
{
echo 0;
}
?>