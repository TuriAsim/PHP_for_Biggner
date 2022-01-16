<?php 

if(isset($_REQUEST['button']))
{
	
	$user="admin";
	$pass="123";
	$username=$_REQUEST['username'];
	$password=$_REQUEST['pass'];
	if($username==$user && $password==$pass)
	{
		echo "login sucessfully !";
		}
		else
		{
			echo "Invalid Username && password !";
			}
	
		
	}
	if(isset($_REQUEST['button_second']))
{
	echo "second ";
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td width="51%" height="387"><form id="form1" name="form1" action="php_forms.php" method="post" >
      <table width="100%" border="1">
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" id="username" /></td>
        </tr>
        <tr>
          <td>password</td>
          <td><input type="password" name="pass" id="pass" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Login 1" /></td>
        </tr>
      </table>
    </form></td>
    <td width="49%"><form id="form2" name="form1" method="post" action="">
      <table width="100%" border="1">
        <tr>
          <td>Username</td>
          <td><input type="text" name="username_second" id="username_second" /></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="pass_second" id="pass_second" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button_second" id="button_second" value="Login 2" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>