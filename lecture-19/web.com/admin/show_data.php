<?php include("main.php");
if(isset($_REQUEST['data']))
{
$data= $_REQUEST['data'];
$sql=mysql_query("select * from `authentication` where `username` ='$data'");
$num= mysql_num_rows($sql);
if($num<1)
{
 $signal="off";
}

else
{
 $signal="on";
}

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="923" border="0" align="left">
  <tr>
    <td height="85"><p>   <?php if(isset($signal) && $signal=='on')
	{
	
	$data=mysql_fetch_array($sql);
	echo $data['username']." "."Founded ";
	
	}
	else
	{
	echo "<h1>No Match !</h1>";
	}
	?></p>&nbsp;</td>
  </tr>
</table>
</body>
</html>
