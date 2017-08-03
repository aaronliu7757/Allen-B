<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>老张博客后台管理系统</title>
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="/0802/blog0802/Public/1.ico">
    <link href="/0802/blog0802/Public/Admin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="/0802/blog0802/Public/Admin/img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">Beaut-zihan</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a class="J_menuItem" href="profile.html">个人资料</a>
                                </li>
                                <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                                </li>
                                <li><a class="J_menuItem" href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo U('Index/delRun');?>">清除缓存</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">张
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo U('Index/index');?>">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span class="nav-label">文章</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Article/add');?>">Insert文章</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Article/lists');?>">文章List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">会员</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('User/userList');?>">会员管理</a>
                            </li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="#">
                            <i class="fa fa-table"></i>
                            <span class="nav-label">权限管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="graph_echarts.html">增加权限</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_flot.html">权限</a>
                            </li>
                        </ul>
                    </li>
                    -->
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">友情链接</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Http/insert');?>">Insert友链</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Http/lists');?>">友链List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label"> &nbsp;评论</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Comment/comment');?>">评论申请</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Comment/comList');?>">评论</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa fa-bar-chart-o"></i> <span class="nav-label">数据</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Data/dataList');?>">还原数据</a>
                            </li>
                            <li><a class="J_menuItem" href="form_builder.html">备份数据</a>
                            </li>
                        </ul>
                    </li>
                       <li>
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span class="nav-label">文章分类</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="<?php echo U('Cate/add');?>">Insert分类</a>
                            </li>
                            <li><a class="J_menuItem" href="<?php echo U('Cate/lists');?>">分类List</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="老张博客" class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown hidden-xs">
                            <a href="<?php echo U('Index/delRun');?>">
                                <i class="fa fa-tasks"></i> 清除缓存
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="<?php echo U('Index/index_v1');?>">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo U('Login/logout');?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo U('Index/index_v1');?>" frameborder="0" data-id="index_v1.html" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2016-2018 <a href="http://jh12.cn" target="_blank">老张博客</a>
            </div>
        </div>
    </div>
    </div>
    <script src="/0802/blog0802/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/0802/blog0802/Public/Admin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/0802/blog0802/Public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/0802/blog0802/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/0802/blog0802/Public/Admin/js/plugins/layer/layer.min.js"></script>
    <script src="/0802/blog0802/Public/Admin/js/hplus.min.js?v=4.0.0"></script>
    <script type="text/javascript" src="/0802/blog0802/Public/Admin/js/contabs.min.js"></script>
    <script src="/0802/blog0802/Public/Admin/js/plugins/pace/pace.min.js"></script>
</body>

</html>