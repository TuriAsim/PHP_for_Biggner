<?php 
include("connection.php");
session_start();
 $admin=$_SESSION['admin'];
if(empty($admin))
{
header("location:index.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</head>

<body style="background:#CCCCCC; ">
<table width="100%" border="1">
  <tr>
    <td height="179">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="8%">Home</td>
    <td width="8%"><a href="user.php">Users</a></td>
    <td width="8%"><a href="news.php">News</a></td>
    <td width="7%"><a href="gallery.php">Gallery</a></td>
    <td width="50%"><a href="search.php">Search</a></td>
    <td width="7%"><a href="logout.php">Logout</a></td>
    <td width="12%">Hi <?php echo $admin;?></td>
  </tr>
</table>
</body>
</html>
