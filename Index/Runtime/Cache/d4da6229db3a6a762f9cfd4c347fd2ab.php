<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo ($config["webname"]); ?>-<?php echo ($curColumn["name"]); ?></title>
<meta name="keywords" content="<?php echo ($config["keywords"]); ?>" />
<meta name="description" content="<?php echo ($config["description"]); ?>" />
<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css" />
</head>
<body>
<div class="header">
	<div class="logo"><img src="<?php echo ($config["logo"]); ?>" alt="<?php echo ($config["webname"]); ?>"></div>


	<!-- nav  -->
	<div class="nav">
		<ul>
		<?php if(is_array($column)): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo["action"] == ACTION_NAME): ?>class="current"<?php endif; ?>><a href="__URL__/<?php echo ($vo["action"]); ?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<!-- nav -->
</div>
<div class="line"></div>