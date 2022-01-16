<?php
if(isset($_REQUEST['button']))
{
	$user="aamir";
	$pass="123";
	$username=$_REQUEST['u'];
	$pasword=$_REQUEST['p'];
	if($username==$user && $pasword==$pass)
	{
		echo "wlcm to fb !";
	}
	else
	{
		echo "passord is wrong !";
	}
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
  <table width="100%" height="25%" border="1" style="background:#3366FF">
    <tr>
      <td><table width="517" border="0" align="right">
        <tr>
          <td width="59">username</td>
          <td width="150"><input name="u" type="text" id="u" /></td>
          <td width="59">pasword</td>
          <td width="147"><input name="p" type="password" id="p" /></td>
          <td width="68"><input name="button" type="submit" id="button" value="Login" /></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
