<?php
mysql_connect("localhost","root","");
mysql_select_db("admin");

if(isset($_REQUEST['act']) && $_REQUEST['act']=="delete")
{
 $ddid=$_REQUEST['pid'];
 mysql_query("delete from `info` where `id`='$ddid'");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="556" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="161">Name</td>
    <td width="125">Nationality</td>
    <td width="82">Action</td>
  </tr>
  
  <?php 
  $sql=mysql_query("select * from `info`");
  while($row=mysql_fetch_array($sql))
  {?>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="background-color:#EBEBEB; font-size:12px; color:#333333; ">
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['nationality'];?></td>
    <td><a href="show.php?act=delete&pid=<?php echo $row['id'];?>">Delete ||  </a><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
  </tr>
  <?php }?>
</table>
</body>
</html>
