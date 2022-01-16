<?php include("main.php");?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
$(document).ready(function()
{

$("#data").keyup(function()
{
var value=$(this).val();
if(value.length<=2)
{
$("#auto").fadeOut("slow");
return false;

}
else
{
$("#auto").slideDown("slow");
$.post("auto.php",{string:value},function(get)
{

$("#auto").html(get)
$("#auto").slideDown("slow");
});
}

});
///////////////////

});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="show_data.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="916" border="1">
    <tr>
      <td width="255">Search </td>
      <td width="645"><input name="data" type="text" id="data" style="width:300px; border-radius:13px; border:2px solid #0099CC; color:
	  #003399; " placeholder="Search..." autocomplete="off" />
	  <div id="auto" style="width:300px; margin-top:-1px; display:none; height:auto; background:#FFFFFF; border-radius:13 0px 13px 0px; border:2px solid #0099CC; color:
	  #003399; "></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
