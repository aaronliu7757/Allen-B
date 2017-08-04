<?php if (!defined('THINK_PATH')) exit();?><ul>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Articles/index',array('id' => $list['id']));?>" title=""><?php echo ($list['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>