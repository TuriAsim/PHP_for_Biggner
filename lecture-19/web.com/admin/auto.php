<?php include("connection.php");
$string=$_REQUEST['string'];
 $sql="select * from `news` where `title`like '%$string%'";
 $query=mysql_query($sql);
  $sql_data=mysql_num_rows($query);
  if($sql_data<1)
  {
  echo "<p>No Reocrd Found !</p>";
  }
  else
  {

  while($row_data=mysql_fetch_array($query))
  {
  ?>
  <li> <?php echo $row_data['title'];?></li>
  <?php
  
  
  }
  
  }
 ?>