<?php $sql_content=mysql_query("select * from `home_contents`");
$row_content=mysql_fetch_assoc($sql_content);?><div class="content_wrap"> 
  <!--content-start-->
  <div class="content">
    <div class="text">
      <h2 style="text-transform:capitalize important;"><?php echo $row_content['title'];?></h2>
      <p><?php echo $row_content['des'];?></p>
    </div>
	<?php $sql_tab_1=mysql_query("select * from `tab_1`");
$row_tab_1=mysql_fetch_assoc($sql_tab_1);?>
    <div class="service_area">
      <div class="service_box fl-lt">
        <h3 style="text-transform:capitalize important; "><?php echo $row_tab_1['title'];?></h3>
        <p><?php $des= $row_tab_1['des'];
		$length=strlen($des);
		if($length<40)
		{
		echo $row_tab_1['des'];
		}
		else
		{
	echo 	substr($des,0,40); echo "...";
		?><div class="read_more_button2"><a href="more.php?id=<?php echo $row_tab_1['id'];?>">Read More</a></div>
		<?php 
		}
		
		?> </p>
        
      </div>
      <div class="service_box fl-lt">
        <h3>What we do</h3>
        <p>Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. </p>
        <div class="read_more_button2"><a href="#">Read More</a></div>
      </div>
      <div class="service_box last fl-lt">
        <h3>How it works</h3>
        <p>Pellentesque diam ligula, egestas eget rhoncus vel, hendrerit in sem. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. Viva mus laoreet erat sit amet ante ullamcorper vestibulum. </p>
        <div class="read_more_button2"><a href="#">Read More</a></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>