<?php if (!defined('THINK_PATH')) exit();?><header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="header-topbar hidden-xs link-border">
                <!--<ul class="site-nav topmenu">-->
                    <!--<li><a href="#">登录</a></li>-->
                    <!--<li><a href="#" rel="nofollow">注册</a></li>-->

                <!--</ul>-->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 自知为愚者的愚者并不愚蠢&nbsp;自以为聪明的愚者却是愚者中之愚者 
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#header-navbar" aria-expanded="false"><span class="sr-only"></span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <h1 class="logo hvr-bounce-in"><a href="<?php echo U('Index/index');?>" title="大智若愚"><img src="/0802/blog0802/Public/App/images/logo.png" alt="大智若愚"></a>ALLEN 博客——源自生活</h1>
            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="/Search" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20"
                               autocomplete="off">
                        <span class="input-group-btn">
		<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
		</span></div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat): $mod = ($i % 2 );++$i;?><li><a href="/0802/blog0802/index.php/Home/<?php echo ($cat['cat_c']); ?>/<?php echo ($cat['cat_v']); ?>/id/<?php echo ($cat['cat_id']); ?>"><?php echo ($cat["cat_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>