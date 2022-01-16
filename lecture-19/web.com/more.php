<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="css/style.css">
<title>Premio</title>
</head>
<body>
<!--header-starts-->
<?php include("header.php");?>
<!--header-end-->
<!--banner-starts-->
<?php include("banner.php");?>
<!--banner-end-->
<!-- content starts from here -->
<div class="content">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="277"><fieldset style="border:2px solid #FF3333; height:120px; width:auto; margin-top:-100px;
	  "
	  >
	  <legend>Info </legend>
	  <?php 
	  echo $check="select * from `tab_1` where `id`='$_REQUEST[id]'";
	  $sql_tab_1=mysql_query($check);
$row_tab_1=mysql_fetch_assoc($sql_tab_1);?>
	  <table width="781" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="48"><?php echo $row_tab_1['title'];?></td>
        </tr>
        <tr>
          <td height="132" valign="top"><p><?php echo $row_tab_1['des'];?></p> </td>
        </tr>
      </table>
      </fieldset>&nbsp;</td>
    </tr>
  </table>
</div>
<!--content-end-->
<?php include("footer.php");?>
<!--footer-end-->
</body>
</html>
