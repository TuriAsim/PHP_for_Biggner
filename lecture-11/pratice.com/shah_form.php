<?php
if(isset($_REQUEST['button'])){
$name="shah";
$pass="12345";
$username=$_REQUEST['u'];
$password=$_REQUEST['p'];

if($username==$name && $password ==$pass)
{
echo "you do good";
}
else
{
echo "you have to improve";
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
  <table width="1095" height="51" border="1" align="right" style="background:#3366FF">
    <tr>
      <td width="149" height="47"><div align="left">Username</div></td>
      <td width="234"><label>
        
        <div align="left">
          <input name="u" type="text" id="u" />
        </div>
      </label></td>
      <td width="221"><div align="left">Password</div></td>
      <td width="232"><label>
        
        <div align="left">
          <input name="p" type="password" id="p" />
        </div>
      </label></td>
      <td width="225"><label>
        <div align="left">
          <input name="button" type="submit" id="button" value="Login" />
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
