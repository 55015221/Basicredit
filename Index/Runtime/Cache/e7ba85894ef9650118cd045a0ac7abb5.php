<?php if (!defined('THINK_PATH')) exit();?>
<div class="wrapper">
<!--幻灯片-->
 <div id="focus">
	<ul>
	<?php if(is_array($slider)): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" target="_blank"><img src="__PUBLIC__/Images/slider/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<!--幻灯片-->

<div class="index-left">
<p style="text-indent:2em;">
	<span style="line-height:2;"><span style="font-size:14px;">通过多年深入分析研究往来账款与信用管理的实际情况，结合现有的技术手段，典信公司创造性地提出往来账款电子化的理论，根据这一理论，公司开发出电子往来账款管理系统。该系统面向各类企业，能够成熟、快速、全面地解决现有往来账款管理与信用管理领域中存在的诸多主要问题，为企业带来重大价值。同时，公司将通过持续的技术和理论创新、积极实践，立志成为全球首屈一指的信用环境提供商，促进信用及信息化发展，造福社会大</span><span style="font-size:14px;">众。</span></span> 
</p>
	<div class="column_box"><span class="more"><a href="__URL__/about" title="更多...">更多...</a></span></div>
</div>
<div class="column index-right">
<b class="tl"></b><b class="tr"></b><b class="bl"></b><b class="br"></b>
	<div class="column_box">
		<ul class="index-state">
			<li><img src="__PUBLIC__/Images/index-1.png" width="58" height="58" alt=""><p>性能卓越,专注于企业往来帐款管理,工作从此轻松.</p></li>
			<li><img src="__PUBLIC__/Images/index-2.png" width="58" height="58" alt=""><p>功能模块完善,可二次开发,用心关注您的体验感受！</p></li>
			<li><img src="__PUBLIC__/Images/index-3.png" width="58" height="58" alt=""><p>专业技术服务, 创新管思维理,是您坚强的后盾.</p></li>
		</ul>
	</div>
</div>

</div>