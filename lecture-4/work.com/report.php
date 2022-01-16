<?php 
extract($_POST);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<fieldset style="border:2px solid #06F; "><legend>Data</legend>

<table width="70%" border="0" align="center" style="background-color:#EEE; color:#069; font-size:12px; text-transform:capitalize;  border-radius:14px;" cellpadding="0" cellspacing="0">
  <tr>
    <td width="38%" height="33">&nbsp;</td>
    <td width="62%">&nbsp;</td>
  </tr>
  <tr>
    <td height="33">Name is :</td>
    <td><?php echo $names;?>&nbsp;</td>
  </tr>
  <tr>
    <td height="36">Father Name is :</td>
    <td><?php echo $father_name;?></td>
  </tr>
  <tr>
    <td>Gender is :</td>
    <td><?php echo $gender;?></td>
  </tr>
  <tr>
    <td height="35">Nationality</td>
    <td><?php echo $nationality;?></td>
  </tr>
  <tr>
    <td height="32">Qualification</td>
    <td><?php echo $_REQUEST['qualification'];?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $address;?></td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</body>
</html>