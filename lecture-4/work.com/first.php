<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
//echo "hello";
//echo "this is my first PHP class";
$i=0;
while($i<=10)
{

$i++;

?>
<table width="432" style="background:#CCCCCC">
  <tr>
    <td width="212">username</td>
    <td width="204"><input type="text" name="textfield" /></td>
  </tr>
  <tr>
    <td>password</td>
    <td><input type="text" name="textfield2" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" /></td>
  </tr>
</table>
<?php
}
?>
</body>
</html>
