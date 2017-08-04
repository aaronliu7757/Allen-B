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
<body class="user-select single">
<?php echo W('Layout/top');;?>
<section class="container">
    <div class="content-wrap">
        <div class="content">
            <header class="article-header">
                <h1 class="article-title"><a href="#" title="用DTcms做一个独立博客网站（响应式模板）"><?php echo ($article['title']); ?></a></h1>
                <div class="article-meta"> <span class="item article-meta-time">
	  <time class="time" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="发表时间：<?php echo ($article['date']); ?>"><i
              class="glyphicon glyphicon-time"></i> <?php echo ($article['date']); ?></time>
	  </span> <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title=""
                    data-original-title="来源：ALLEN 博客"><i class="glyphicon glyphicon-globe"></i> ALLEN 博客</span> <span
                        class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title=""
                        data-original-title="<?php echo ($article['cat_name']); ?>"><i class="glyphicon glyphicon-list"></i> <a href="#" title="<?php echo ($article['cat_name']); ?>"><?php echo ($article['cat_name']); ?></a></span>
                    <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title=""
                          data-original-title="浏览量：<?php echo ($article['read_num']); ?>"><i class="glyphicon glyphicon-eye-open"></i> <?php echo ($article['read_num']); ?></span> <span
                            class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="评论量：4"><i class="glyphicon glyphicon-comment"></i> 4</span></div>
            </header>

            <article class="article-content">
              <?php echo ($article['content']); ?>
            </article>
            
            <!--<div class="article-tags">标签：<a href="#list/2/" rel="tag">DTcms博客</a><a href="#list/3/" rel="tag">木庄网络博客</a><a-->
                    <!--href="#list/4/" rel="tag">独立博客</a><a href="#list/5/" rel="tag">修复优化</a>-->
            <!--</div>-->
            <br />
            <br />
            <div align="center" class="open-message"><i class="fa fa-bullhorn"></i>&nbsp;ALLEN 博客 , 版权所有丨如未注明 , 均为原创丨, 转载请注明<a href="#" target="_blank" title="" data-original-title="ddd">ALLEN 博客</a>！</div>
            <br />
            <div class="relates">
                <div class="title">
                    <h3>相关推荐</h3>
                </div>
                <?php echo W('Layout/recommentarticle');;?>
            </div>
            <!--<div class="title" id="comment">-->
                <!--<h3>评论</h3>-->
            <!--</div>-->
            <!--<div id="respond">-->
                <!--<form id="comment-form" name="comment-form" action="" method="POST">-->
                    <!--<div class="comment">-->
                        <!--<input name="" id="" class="form-control" size="22" placeholder="您的昵称（必填）" maxlength="15"-->
                               <!--autocomplete="off" tabindex="1" type="text">-->
                        <!--<input name="" id="" class="form-control" size="22" placeholder="您的网址或邮箱（非必填）" maxlength="58"-->
                               <!--autocomplete="off" tabindex="2" type="text">-->
                        <!--<div class="comment-box">-->
                            <!--<textarea placeholder="您的评论或留言（必填）" name="comment-textarea" id="comment-textarea"-->
                                      <!--cols="100%" rows="3" tabindex="3"></textarea>-->
                            <!--<div class="comment-ctrl">-->
                                <!--<div class="comment-prompt" style="display: none;"><i-->
                                        <!--class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span>-->
                                <!--</div>-->
                                <!--<div class="comment-success" style="display: none;"><i class="fa fa-check"></i> <span-->
                                        <!--class="comment-prompt-text">评论提交成功...</span></div>-->
                                <!--<button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</form>-->

            <!--</div>-->
            <!--<div id="postcomments">-->
                <!--<ol id="comment_list" class="commentlist">-->
                    <!--<li class="comment-content"><span class="comment-f">#2</span>-->
                        <!--<div class="comment-main"><p><a class="address" href="#" rel="nofollow"-->
                                                        <!--target="_blank">木庄网络博客</a><span class="time">(2016/10/28 11:41:03)</span><br>不错的网站主题，看着相当舒服-->
                        <!--</p></div>-->
                    <!--</li>-->
                    <!--<li class="comment-content"><span class="comment-f">#1</span>-->
                        <!--<div class="comment-main"><p><a class="address" href="#" rel="nofollow"-->
                                                        <!--target="_blank">木庄网络博客</a><span class="time">(2016/10/14 21:02:39)</span><br>博客做得好漂亮哦！-->
                        <!--</p></div>-->
                    <!--</li>-->
                <!--</ol>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
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