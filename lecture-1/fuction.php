<?php
if(isset($_REQUEST['zoom']))
{
	echo $user=$_REQUEST['username'];
	echo "<hr>";
	echo $pass=$_REQUEST['password'];

}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" style="background:#CCCCCC">
    <tr>
      <td width="50%">username</td>
      <td width="50%"><input type="text" name="textfield" /></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" name="textfield2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
