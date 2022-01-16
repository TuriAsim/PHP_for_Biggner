<?php
mysql_connect("localhost","root","");
mysql_select_db("admin");
$id=$_REQUEST['id'];
$sql_record=mysql_query("select * from info where id='$id'");
$row_record=mysql_fetch_array($sql_record);

if(isset($_REQUEST['act']) && $_REQUEST['act']=="update")
{
extract($_POST);
mysql_query("update info set name='$n',fathername='$f' where `id`='$id'");
///echo $id;
header("location:show.php");
}
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="454"><form id="form1" name="form1" method="post" action="update.php?act=update">
      <table width="50%" border="0" align="center" style="background-color:#EEE; border-radius:14px;" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td height="33">Name</td>
          <td><input type="text" name="n" id="n" value="<?php echo $row_record['name'];?>" /></td>
        </tr>
        <tr>
          <td height="36">Father Name</td>
          <td><input type="text" name="f" id="f" value="<?php echo $row_record['fathername'];?>" /></td>
        </tr>
        <tr>
          <td height="35">&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Submit" />
            <input name="id" type="hidden" id="id" value="<?php echo $row_record['id'];?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>