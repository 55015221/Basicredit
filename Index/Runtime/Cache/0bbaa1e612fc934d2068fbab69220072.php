<?php if (!defined('THINK_PATH')) exit();?>
<div class="footer">
	
	<div class="copyright">
		<div style="float:left">
	<script src="http://www.ebs.gov.cn/Validate/IconProcess.aspx?domainid=3B7FF64E-F875-4EE4-9F34-998E6500A901&show=pic&width=140&height=50" type="text/javascript"></script>
	</div>
		<p><?php echo ($config["copyright"]); ?>&nbsp;<a href="http://<?php echo ($_SERVER['SERVER_NAME']); ?>" title="<?php echo ($config["webname"]); ?>"><?php echo ($config["webname"]); ?></a>&nbsp;<?php echo ($config["licence"]); ?></p>
<p>Powered by Basicredit&nbsp;&nbsp;©2009-<?php echo (substr(date('Y-m-d g:i a',time()),0,4)); ?>&nbsp;&nbsp;<?php echo ($_SERVER['SERVER_NAME']); ?></p>
</div>
</div>
<script type="text/javascript" src="__PUBLIC__/Js/jquery.min.js" /></script>
<script type="text/javascript" src="__PUBLIC__/Js/public.js" /></script>
</body>
</html>