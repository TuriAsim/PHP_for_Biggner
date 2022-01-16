<?php 
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
</head>

<body style="background:#CCCCCC; ">
<table width="100%" border="1">
  <tr>
    <td height="179">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="9%">&nbsp;</td>
    <td width="9%">&nbsp;</td>
    <td width="9%">&nbsp;</td>
    <td width="9%">&nbsp;</td>
    <td width="54%"><a href="logout.php">Logout</a></td>
    <td width="10%">Hi <?php echo $admin;?></td>
  </tr>
</table>
</body>
</html>
