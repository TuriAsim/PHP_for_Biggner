<?php 
include("main.php");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p><a href="upload.php">Upload Gallery Images
</a></p>
<table width="413" border="1" align="center" class="table-hover">
  <thead>
    <tr>
      <td>Title</td>
      <td>Image</td>
      <td>Action</td>
    </tr>
  </thead>
  <?php $sql_data=mysql_query("select * from `gallery_images`");
  
  while($row_data=mysql_fetch_array($sql_data))
  {?>
  <tr>
    <td><?php echo $row_data['title'];?></td>
    <td><img src="<?php echo $row_data['image'];?>" width="100" height="100" /></td>
    <td>&nbsp;</td>
  </tr>
  <?php }?>
</table>
<p>&nbsp; </p>
</body>
</html>
