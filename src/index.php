<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type='text/javascript' src='assets/js/jquery.js'></script>
<script type='text/javascript' src="assets/js/galleria-1.3.5.min.js"></script>
<title>Insert title here</title>
</head>
<body>
<script>
$(document).ready(function(){
	 
	});
Galleria.loadTheme('assets/js/galleriaClassic/galleria.classic.js');
Galleria.run('.galleria');
</script>
<style>
    .galleria{ width: 700px; height: 400px; background: #000 }
</style>
<?php

$navItems = array ("home" => "index.php" );


?>
<div id='header'>
		<div id='topNavigation' class='navigation'>
		<?php foreach($navItems as $key=>$val){?>
			<div class='navigationItem'>
				<a href='<?php echo $val;?>'><?php echo $key;?></a>
			</div>
		<?php }?>
		</div>
</div>
<div id='main'>
<div class="galleria">
    <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg">
     <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg">
      <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Bowling_Balls_Beach_2_edit.jpg/100px-Bowling_Balls_Beach_2_edit.jpg">
</div>
</div>
<div id='footer'></div>
</body>
</html>