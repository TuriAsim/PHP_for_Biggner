<?php 
include("main.php");
if(isset($_REQUEST['act']) && $_REQUEST['act']=='delete')
{
$id=$_REQUEST['id'];
$sql=mysql_query("select * from `gallery_images` where `id`='$id'");
$row=mysql_fetch_array($sql);
$path=$row['image'];
unlink($path);

mysql_query("delete from `gallery_images` where `id`='$id'");
}
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
    <td><a href="gallery.php?act=delete&id=<?php echo $row_data['id'];?>">Delete</a></td>
  </tr>
  <?php }?>
</table>
<p>&nbsp; </p>
</body>
</html>
