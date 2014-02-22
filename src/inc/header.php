<?php

$navItems = array (
"首页" => "index.php",
"关于恩尚" => "about.php",
"恩尚套餐" => "package.php",
"恩尚画廊" => "gallery.php",
 );
 function getKeyByValue ($array, $value) {
    $results = array_keys($array, $value);
    return $results[0];
} 
 function getCurrentPage ()
 {
 	$url = $_SERVER['REQUEST_URI'];
 	if(!$url)
 	{
 		return 'index.php';
 	}
 	$end =  strrpos($url, '.');
 	$start =  strrpos($url, '/') + 1;
 	if($start >= $end)
 	{
 		return 'index.php';
 	}
 	return substr($url, $start);
 }
$CURRENT = getCurrentPage();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type='text/javascript' src='assets/js/jquery.js'></script>
  <script src="assets/js/modernizr.js"></script>
    <script defer src="assets/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="assets/style/flexslider.css" type="text/css" media="screen" />
<link href="assets/style/style.css" rel="stylesheet" type="text/css">
<title>恩尚婚典 - <?php echo getKeyByValue($navItems,$CURRENT);?></title>
</head>
<body>
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
<style>
    .galleria{ width: 900px; height: 400px; background: #000 }
</style>
<div id='content' class='<?php echo substr($CURRENT,0,strrpos($CURRENT, '.'));?>Content'>
<div id='header'>
		<div id='topNavigation' class='navigation'>
		<?php foreach($navItems as $key=>$val){ ?>
			<div class='navigationItem'>
				<a href='<?php echo $val;?>' <?php if($CURRENT == $val) echo "class='active'";?>><?php echo $key;?></a>
			</div>
		<?php }?>
		<div class='clear'></div>
		</div>
</div>
<div id='main'>