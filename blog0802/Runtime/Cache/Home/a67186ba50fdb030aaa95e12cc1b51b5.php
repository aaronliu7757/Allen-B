<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>海纳百川 - 有容乃大</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/0802/blog0802/Public/App/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/0802/blog0802/Public/App/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/0802/blog0802/Public/App/css/style.css">
    <link rel="stylesheet" type="text/css" href="/0802/blog0802/Public/App/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="/0802/blog0802/Public/App//0802/blog0802/Public/App/images/icon.png">
    <link rel="shortcut icon" href="/0802/blog0802/Public/App//0802/blog0802/Public/App/images/favicon.ico">
    <script src="/0802/blog0802/Public/App/js/jquery-2.1.4.min.js"></script>
    <script src="/0802/blog0802/Public/App/js/nprogress.js"></script>
    <script src="/0802/blog0802/Public/App/js/jquery.lazyload.min.js"></script>
    <!--[if gte IE 9]>
    <script src="/0802/blog0802/Public/App/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/0802/blog0802/Public/App/js/html5shiv.min.js" type="text/javascript"></script>
    <script src="/0802/blog0802/Public/App/js/respond.min.js" type="text/javascript"></script>
    <script src="/0802/blog0802/Public/App/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href = 'upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
<?php echo W('Layout/top');;?>
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <div id="focusslide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#focusslide" data-slide-to="0" class="active"></li>
                    <li data-target="#focusslide" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#" title="专业心灵鸡汤">
                            <img src="/0802/blog0802/Public/App/images/banner.jpg" alt="专业心灵鸡汤"
                                 class="img-responsive" ></a>
                    </div>
                    <div class="item">
                        <a href="#" title="专业心灵鸡汤">
                            <img src="/0802/blog0802/Public/App/images/banner2.jpg" alt="专业心灵鸡汤" class="img-responsive" ></a>
                    </div>
                </div>
                <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
                        class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide"
                                                           role="button" data-slide="next" rel="nofollow"> <span
                    class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span
                    class="sr-only">下一个</span> </a></div>

            <?php echo W('Layout/recomment');;?>

            <div class="title">
                <h3>最新文章</h3>
            </div>
            <?php echo W('Layout/article');;?>
        </div>
    </div>
    <?php echo W('Layout/left');;?>
</section>
<footer class="footer">
    <div class="container">
        <p>Copyright &copy; 2016-2018 版权所有 ALLEN 博客  </p>
    </div>
    <div id="gotop"><a class="gotop"></a></div>
</footer>
<script src="/0802/blog0802/Public/App/js/bootstrap.min.js"></script>
<script src="/0802/blog0802/Public/App/js/jquery.ias.js"></script>
<script src="/0802/blog0802/Public/App/js/scripts.js"></script>

</body>
</html>