<?php include("main.php"); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<table width="413" border="1" align="center" class="table-hover">
  <thead><tr>
    <td>Username</td>
    <td>Password</td>
    <td>Action</td>
  </tr></thead>
  
  <?php $sql_data=mysql_query("select * from authentication");
  
  while($row_data=mysql_fetch_array($sql_data))
  {?>
  
  
  <tr>
    <td><?php echo $row_data['username'];?></td>
    <td><?php echo $row_data['password'];?></td>
    <td>&nbsp;</td>
  </tr>
  <?php }?>
</table>
</body>

</html>
