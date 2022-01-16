<?php 
include("connection.php");
 $id=$_REQUEST['ids'];
 $sql=mysql_query("select * from `news` where `id`='$id'");
 $row=mysql_fetch_array($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="501" height="210" border="0" align="center" style=" background-color:#F3F3F3; border:2px solid #333333;">
  <tr style="background-color:#999999; ">
    <td height="33" align="right">X</td>
  </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">Title</td>
          <td><input name="title" type="text" id="title" value="<?php echo $row['title'];?>" /></td>
        </tr>
        <tr>
          <td align="center">Description</td>
          <td><textarea name="des" cols="33" rows="5" id="des"><?php echo $row['news'];?> </textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="button" name="Submit" value="Submit" onclick="update_record(<?php echo $id;?>)" /></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
