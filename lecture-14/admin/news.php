<?php include("main.php"); 
if(isset($_REQUEST['act']) && $_REQUEST['act'] =='delete')
{
$id=$_REQUEST['id'];
$sql=mysql_query("select * from `news` where `id`='$id'");
$row=mysql_fetch_array($sql);
//$path=$row['image'];
//unlink($path);

mysql_query("delete from `news` where `id`='$id'");
}



?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script>

function get_form(id)
{
///alert(id);
$.post("form.php",{ids:id},function(forms)
{
$("#data").html(forms);
$("#data").slideDown("slow");

});
}
function update_record(id)
{
var title=$("#title").val();
var desc=$("#des").val();
///alert(title+desc);
$.post("update_ajax.php",{tit:title,des:desc,ids:id},function(italrounder)
{
if(italrounder==1)
{
$("#data").slideUp("slow");
}
else
{


}
///alert(italrounder);


});
}
</script>

</head>


<body>
<p><a href="upload_news.php">Upload News !</a></p>
<table width="413" border="1" align="center" class="table table-strip">
  <thead><tr>
  <div id="data" style="display:none; position:absolute; margin-left:224px; "></div>
    <td>title</td>
    <td>news</td>
    <td>Action</td>
  </tr></thead>
  
  <?php
  
   $sql="select * from `news` ";
  $sql_data=mysql_query($sql);
  
  while($row_data=mysql_fetch_array($sql_data))
  {?>
  
  
  <tr>
    <td><?php echo $row_data['title'];?></td>
    <td><?php echo $row_data['news'];?></td>
    <td><a href="news.php?act=delete&id=<?php echo $row_data['id'];?>">Delete</a><a href="javascript:;" onclick="get_form(<?php echo $row_data['id'];?>)"> Update </a></td>
  </tr>

 <?php } ?>
</table>
</body>

</html>

