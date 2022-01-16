<?php include("connection.php");?><table width="413" border="1" align="center" class="table table-strip">
  <thead>
    <tr>
      <div id="data" style="display:none; position:absolute; margin-left:224px; "></div>
      <td>title</td>
      <td>news</td>
      <td>Action</td>
    </tr>
  </thead>
  <?php
  
   $sql="select * from `news` ";
  $sql_data=mysql_query($sql);
  
  while($row_data=mysql_fetch_array($sql_data))
  {?>
  <tr>
    <td><?php echo $row_data['title'];?></td>
    <td><?php echo $row_data['news'];?></td>
    <td><a href="news.php?act=delete&amp;id=<?php echo $row_data['id'];?>">Delete</a><a href="javascript:;" onClick="get_form(<?php echo $row_data['id'];?>)"> Update </a></td>
  </tr>
  <?php } ?>
</table>
