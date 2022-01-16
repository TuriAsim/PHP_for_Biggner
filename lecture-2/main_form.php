<?php
mysql_connect("localhost","root","");
mysql_select_db("admin");
if(isset($_REQUEST['button']))
{
extract($_POST);
$error=array();
if(isset($names) && $names!="")
{
$error[]="";
}
else
{
$error[]="Name is Missing";
}
/////////////////////
if(isset($father_name) && $father_name!="")
{
$error[]="";
}
else
{
$error[]="Father Name is Missing";
}
//////////////
if(isset($gender) && $gender!="")
{
$error[]="";
}
else
{
$error[]="Gender is Missing";
}
///////nationality////////
if(isset($nationality) && $nationality!="")
{
$error[]="";
}
else
{
$error[]="nationality is Missing";
}

//////////////////////
if(isset($qualification) && $qualification!="")
{
$error[]="";
}
else
{
$error[]="qualification is Missing";
}

/////////////////////////

$act=mysql_query("insert into `info` set `name`='$names',`fathername`='$father_name',`gender`='$gender',`nationality`='$nationality',`qualification`='$qualification',`address`='$add'") or die(mysql_error());
if($act)
{
$act="Record inserted";
}
else
{

echo "sorry";
}
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
    <td height="454"><form id="form1" name="form1" method="post" action="main_form.php">
      <table width="50%" border="0" align="center" style="background-color:#EEE; border-radius:14px;" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33" colspan="2"><?php if(isset($act))
		  {
		  ?><div id="" style="padding:12px; background-color:#009933; border:1px solid #FFFFFF ; color:#FFFFFF; font-weight:bold;"><?php echo $act;
}		  
		 //// header("Location:show.php");
		  ?></div>
		  <?php ?>
		  <?php if(isset($error))
		  {
		  ?><div id="" style="padding:12px; background-color:#FF0000; border:1px solid #FFFFFF ; color:#FFFFFF; font-weight:bold;"><?php 
		  foreach($error as $errors)
{
echo "<li>".$errors."</li>";
echo "<br>";
}
		  
		 ///// header("Location:show.php");
		  ?></div>
		  <?php 
		  }
		 ?>&nbsp;</td>
          </tr>
        <tr>
          <td height="33">Name</td>
          <td><input type="text" name="names" id="names" /></td>
        </tr>
        <tr>
          <td height="36">Father Name</td>
          <td><input type="text" name="father_name" id="father_name" /></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td>Male 
            <input type="radio" name="gender" id="radio" value="male" /> 
            Female 
            <input type="radio" name="gender" id="radio2" value="female" /></td>
        </tr>
        <tr>
          <td height="35">Nationality</td>
          <td><select name="nationality" id="nationality">
          <option>Select Nationality</option>
          <option value="pakistan">pakistani</option>
          <option value="india">indiaian</option>
          <option value="pakistan">pakistani</option>
          <option value="india">indiaian</option>
          <option value="pakistan">pakistani</option>
          <option value="india">indiaian</option>
         
          </select></td>
        </tr>
        <tr>
          <td height="32">Qualification</td>
          <td>Matric 
            <input name="qualification" type="checkbox" id="qualification" value="matric" />
            Bsc
            <input name="qualification" type="checkbox" id="qualification" value="bsc" /></td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="add" id="add" cols="33" rows="7"></textarea></td>
        </tr>
        <tr>
          <td height="35">&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Submit" /></td>
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