<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
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
<div id='main'></div>
<div id='footer'></div>
</body>
</html>