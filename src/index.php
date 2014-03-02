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

</script>
<h1>恩尚婚典</h1>
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="assets/images/home2.jpg" />
    </li>
    <li>
      <img src="assets/images/home3.jpg" />
    </li>
     <li>
      <img src="assets/images/home1.jpg" />
    </li>
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div>
<?php include 'inc/footer.php';?>
</body>
</html>