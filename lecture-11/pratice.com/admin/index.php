<?php include("connection.php");

if(isset($_REQUEST['act']) && $_REQUEST['act']=="login")
{
session_start();
//extract($_POST);
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

$sql=mysql_query("select * from `authentication` where `username`='$user' and `password`='$pass'");
$num=mysql_num_rows($sql);
if($num<1)
{
$error="Invalid Username && Password !";
}
else

{
$_SESSION['admin']=$user;
header("location:main.php");
}

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="400"><form id="form1" name="form1" method="post" action="index.php?act=login">
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
       <tr>
         <td colspan="2" align="center"><?php if(isset($error))
		 {
		 echo $error;
		 }?>&nbsp;</td>
       </tr> <tr>
          <td width="32%">Username</td>
          <td width="68%"><input name="user" type="text" id="user" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="pass" type="password" id="pass" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Login" /></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
