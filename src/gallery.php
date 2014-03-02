<?php include 'inc/header.php';?>
<script>
$(document).ready(function(){
	$('.flexslider').flexslider({
	    animation: "slide",
	    animationLoop: true,
	    itemWidth: 900,
	    itemMargin: 5
	  });
	});
function setImg(i)
{
	//alert($('.galleryContent ol.flex-control-nav li:nth-child(1) a').length);
	$('.galleryContent ol.flex-control-nav li:nth-child(' + i + ') a').click();
	}
</script>
<h1>恩尚画廊</h1>
<div class="flexslider">
  <ul class="slides">
  <?php for($i = 1; $i < 13; $i++){?>
    <li>
      <img src="assets/images/g<?php echo $i;?>.jpg" />
    </li>
   <?php }?>
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div>
<div id='tumbnails'>
<?php for($i = 1; $i < 13; $i++){?>
    <span><a>
      <img onclick='setImg(<?php echo $i;?>)' style='width:100px;margin-right:8px;margin-bottom:3px;' src="assets/images/g<?php echo $i;?>.jpg" />
   		</a>
    </span>
   <?php }?>
</div>
<?php include 'inc/footer.php';?>
</body>
</html>