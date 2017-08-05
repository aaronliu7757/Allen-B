<?php if (!defined('THINK_PATH')) exit(); if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><article class="excerpt excerpt-5" style=""><a class="focus" href="<?php echo U('Articles/index',array('id' => $list['id']));?>">
        <img class="thumb" src="<?php if($list['tit_img'] == null): ?>/0802/blog0802/Public/Public/defult.jpg<?php else: ?>/0802/blog0802<?php echo ($list['tit_img']); endif; ?>" alt="<?php echo ($list['tit_img']); ?>" style="display: inline;" /></a>
        <header><a class="cat"  title="MZ-NetBlog主题"><?php echo ($list['cat_name']); ?><i></i></a>
            <h2><a href="<?php echo U('Articles/index',array('id' => $list['id']));?>" title="<?php echo ($list['title']); ?>"><?php echo ($list['title']); ?></a>
            </h2>
        </header>
        <p class="meta">
            <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo ($list['date']); ?></time>
            <span class="views"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($list['read_num']); ?></span> <a class="comment" href="<?php echo U('Articles/index',array('id' => $list['id']));?>" title="评论"
        ><i class="glyphicon glyphicon-comment"></i> 4</a>
        </p>
        <p class="note"><?php
 $data = $list['content'] ; echo mb_substr(strip_tags(cutArticle($data)),0,120,'utf-8'); ?>....</p>
    </article><?php endforeach; endif; else: echo "" ;endif; ?>

<div>
    
<style>
    .pages a,.pages span {
        display:inline-block;
        padding:4px 7px;
        margin:0 2px;
        border:1px solid #D5D4D4;
        -webkit-border-radius:1px;
        -moz-border-radius:1px;
        border-radius:1px;
    }
    .pages a,.pages li {
        display:inline-block;
        list-style: none;
        text-decoration:none; color:#077ee3;
    }

    .pages a:hover{
        border-color:#077ee3;
    }
    .pages span.current{
        background:#077ee3;
        color:#FFF;
        font-weight:700;
        border-color:#077ee3;
    }

    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }

</style>

    <br />
    <br />
    <div align="center">
        <ul class="pages" >
            <?php echo ($pages); ?>
        </ul>
    </div>
</div>