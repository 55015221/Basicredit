<?php if (!defined('THINK_PATH')) exit();?>
<div class="wrapper">
	<?php if(!empty($list["pic"])): ?><div class="banner">
		<img src="__PUBLIC__/Images/slider/<?php echo ($list["pic"]); ?>" alt="<?php echo ($list["name"]); ?>" />
	</div><?php endif; ?>

	<div class="column left">
	<b class="tl"></b><b class="tr"></b><b class="bl"></b><b class="br"></b>
		<div class="column_title">
			<!-- <span>更多&gt;&gt;</span> -->
			<h2><?php echo ($list["name"]); ?></h2>
		</div>
		<div class="column_box">
			<ul class="list-list">
			<?php if(is_array($list['child'])): $i = 0; $__LIST__ = $list['child'];if( count($__LIST__)==0 ) : echo "暂无分类~" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($vo["id"] == $article['parent_id'] or $vo["id"] == $article[0]['parent_id']): ?>class="current"<?php endif; ?>><a href="__URL__/<?php echo ($list["action"]); ?>/id/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "暂无分类~" ;endif; ?>
			</ul>
		</div>
	</div>
	<?php if($islist != true): ?><div class="column right">
	<b class="tl"></b><b class="tr"></b><b class="bl"></b><b class="br"></b>
		<div class="column_title">
			<!-- <span>更多&gt;&gt;</span> -->
			<h2><?php echo ($article["title"]); ?></h2>
		</div>
		<div class="column_box">
			<?php echo ($article["content"]); ?>
		</div>
	</div>	
	<?php else: ?>
	<div class="column right">
	<b class="tl"></b><b class="tr"></b><b class="bl"></b><b class="br"></b>
		<div class="column_title">
			&nbsp;&nbsp;当前位置：<a href="__APP__">首页</a>&nbsp;&gt;&nbsp;<a href="__URL__">行业动态</a>
			<!-- <span>更多&gt;&gt;</span> 
			<h2><?php echo ($list["name"]); ?></h2> -->
		</div>
		<div class="column_box">
			<ul class="news">
				<?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "暂无内容~" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span><?php echo (substr($vo["createtime"],0,10)); ?></span><a href="__URL__/view/id/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "暂无内容~" ;endif; ?>
			</ul>		
		</div>
	</div><?php endif; ?>
</div>