<!doctype html>
<html lang='<?=$lang?>'>
<head>
<meta charset="utf-8">
<title><?=get_title($title)?></title>
<?php if(isset($favicon)):?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif;?>
<link rel='stylesheet' type= 'text/css' href='<?=$stylesheet?>'/>
<script src='<?=$modernizr?>'></script>
</head>
<body id = '<?=$pageId?>'>

	<div id='wrapper'>
		<div id='header'><?=$header?></div>
		<div id='meny'><?=navbar($meny)?></div>
		<div id='main'><?=$main?></div>
		<div id='footer'><?=$footer?></div>
	</div>
</body>
</html>