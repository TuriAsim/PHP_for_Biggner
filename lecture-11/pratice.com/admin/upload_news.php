<?php 
include("main.php");
if(isset($_REQUEST['act']) && $_REQUEST['act']=="upload")
{
extract($_POST);
$folder="images/";
 $path=$folder.basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$path))
{
mysql_query("insert into `gallery_images` set `title`='$title',`image`='$path'");
header("location:gallery.php");
}
else
{
echo "error in uploading !";

}}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>
$(document).ready(function()
{
$("#title").keyup(function()
{


var value=$(this).val();
//alert(value);

$.post("data.php",{title:value},function(amir)
{
///alert(amir);
$("#response").text(amir);

});
});




});


</script>

</head>

<body>
<form action="upload.php?act=upload" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <div id="container"><table width="608" border="1" align="center">
    <tr>
      <td width="172">Title</td>
      <td width="213"><input name="title" type="text" id="title" /><span id="response"></span></td>
    </tr>
    <tr>
      <td>Upload news </td>
      <td><textarea name="textarea"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Upload !" /></td>
    </tr>
  </table></div>
</form>
</body>
</html>
