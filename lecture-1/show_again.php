<?php
mysql_connect("localhost","root","");
mysql_select_db("admin");
?><table width="480" border="1" align="center">
  <tr>
    <td>Username</td>
    <td>gender</td>
    <td>&nbsp;</td>
  </tr>
  <?php 
  $whatever=mysql_query("select * from `info` order by rand()") or die(mysql_error());
  while($row=mysql_fetch_array($whatever))
  {
  ///print_r($row);
  ?>
  <tr>
    <td><?php echo $row['name'];?>&nbsp;</td>
    <td><?php echo $row['gender'];?></td>
    <td>&nbsp;</td>
  </tr>
  <?php }?>
</table>


