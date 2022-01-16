<div class="banner_wrap"> 
  <!--banner-start-->
  <div class="banner">
    <div class="banner_left fl-lt"> <img src="img/banner_pic.jpg" alt="" width="413" height="275"> </div>
    <div class="banner_right fl-rt">
      
	  <?php $sql_news=mysql_query("select * from `news` where `status`='on'");
	  $row_news=mysql_fetch_assoc($sql_news);
	  ?>
	  
	  <h2><?php echo $row_news['title'];?></h2>
      <p><?php echo $row_news['news'];?></p>
      <div class="read_more_button"><a href="#">Read More</a></div>
    </div>
  </div>
</div>