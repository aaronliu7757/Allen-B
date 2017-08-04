<?php if (!defined('THINK_PATH')) exit();?><aside class="sidebar">
    <div class="fixed">
        <div class="widget widget-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab"
                                                          data-toggle="tab">心灵鸡汤一</a></li>
                <li role="presentation"><a href="#contact" aria-controls="contact" role="tab"
                                           data-toggle="tab">心灵鸡汤二</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane contact active" id="notice">
                    <br/>
                    &nbsp; &nbsp; &nbsp; &nbsp;你永远不会比现在的自己更年轻。但请相信，如果你拥有良好的生活态度，无论生活如何打击你，你都能抬起头继续前行，意识到让生活美好的那些小小的快乐，做真实的自己置身于能让自己快乐的事情中。最后，你的生活将会变得充实而美满，你的生活才真正变得美妙而精彩。

                </div>
                <div role="tabpanel" class="tab-pane contact" id="contact">
                    <br/>
                    <p style="color: #0e9aef">  &nbsp; &nbsp; &nbsp; &nbsp; There are things that we don’t want to happen but have to accept, things we don’t want to know but have to learn. and people we can’t live without but have to let go.</p>
                    <br/>

                </div>
            </div>
        </div>
        <div class="fixed">
            <!-- <div class="widget widget_search">
                <form class="navbar-form" action="<?php echo U('Search/index');?>" method="post">
                    <div class="input-group">
                        <input type="text" name="like" class="form-control" size="35" placeholder="请输入关键字"
                               maxlength="15" autocomplete="off">
                        <span class="input-group-btn">
                    <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
                    </span></div>
                </form>
            </div> -->
            <div class="widget widget_sentence">
                <h3>文章分类</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">
                            <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cats): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Articles/articleCat',array('cat_id'=>$cats['cat_id']));?>" draggable="false"><?php echo ($cats['cat_name']); ?><span class="badge"></span></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="widget widget_sentence">
                <h3>标签云</h3>
                <div class="widget-sentence-content">
                    <ul class="plinks ptags">
                            <?php if(is_array($labels)): $i = 0; $__LIST__ = $labels;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$labels): $mod = ($i % 2 );++$i;?><li><a href="/0802/blog0802/index.php/Home/Search/two/like/<?php echo ($labels['labels']); ?>" draggable="false"><?php echo ($labels['labels']); ?><span class="badge"></span></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="widget widget_hot">
        <h3>最热文章</h3>
        <ul>
            <?php if(is_array($hots)): $i = 0; $__LIST__ = $hots;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hots): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Articles/index',array('id' => $hots['id']));?>"><span class="thumbnail">
                    <img class="thumb" src="<?php if($hots['tit_img'] == null): ?>/0802/blog0802/Public/Public/defult.jpg<?php else: echo ($hots['tit_img']); endif; ?>" alt=""
                         style="display: block;">
                    </span>
                    <br />
                    <span class="text"><?php echo ($hots['title']); ?></span><span class="muted"><i class="glyphicon glyphicon-time"></i>
                        <?php echo ($hots['date']); ?>
                    </span>
                    <br /><span class="muted"><i class="glyphicon glyphicon-eye-open"></i><?php echo ($hots['read_num']); ?></span></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>


        </ul>
    </div>
    <!--<div class="widget widget_sentence">-->
        <!--<a href="#" rel="nofollow" title="MZ-NetBlog主题">-->
            <!--<img style="width: 100%" src="/0802/blog0802/Public/App/images/ad.jpg"></a>-->
    <!--</div>-->
    <div class="widget widget_sentence">
        <h3>友情链接</h3>
        <div class="widget-sentence-link">
            <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vol["link"]); ?>" title="网站建设"><?php echo ($vol["name"]); ?></a>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</aside>