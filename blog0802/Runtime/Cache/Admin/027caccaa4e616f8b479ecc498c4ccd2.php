<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/0802/blog0802/Public/Admin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content">
    <form method="post" action="" id="myform">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" >
                        <h5>修改文章</h5>
                    </div>
                    <div class="ibox-content no-padding" >
                       <textarea class="summernote" name="articles">
                            <?php echo ($article["content"]); ?>
                       </textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>修改文章选项</h5>
                    </div>
                    <div class="ibox-content">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">标题</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="<?php echo ($article["title"]); ?>" name="title">
                                </div>
                            </div>
                           <br> <br>
                           
                           <div class="form-group has-warning">
                                <label class="col-sm-3 control-label">类型</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="cat_id">
                                        <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i; if($res['cat_id'] == $article['cat_id']): ?>  
                                                <option value="<?php echo ($res["cat_id"]); ?>" selected> <?php echo ($res["cat_name"]); ?></option>
                                             <?php else: ?>
                                                <option value="<?php echo ($res["cat_id"]); ?>"> <?php echo ($res["cat_name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                                    </select>
                                </div>
                            </div>
                            <br> <br>
                            <div class="form-group has-success">
                                <label class="col-sm-3 control-label">标签</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="r_id">
                                       <option>选择标签</option>
                                            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if($vol['id'] == $article['r_id']): ?> 
                                                    <option value="<?php echo ($vol["id"]); ?>" selected><?php echo ($vol["labels"]); ?></option>
                                                 <?php else: ?>
                                                    <option value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["labels"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                           <br> <br>
                           <div class="form-group">
                               <label class="col-sm-3 control-label">图片：</label>
                                <div class="col-sm-9">
                                    <input type="file" name="app" class="form-control">
                                </div>
                            </div>
                            <br> <br>
                            <input type="hidden" name="id" value="<?php echo ($article["id"]); ?>" /> 
                            <br> <br>
                            <div class="form-group">
                                  <div class="alert alert-warning">
                                      <a class="alert-link" >模块暂无</a>
                                  </div>
                                  <div class="alert alert-info">
                                      <a class="alert-link">模块暂无</a>.
                                  </div>
                                  <div class="alert alert-danger">
                                      <a class="alert-link" >模块暂无</a>.
                                  </div>
                                <div class="alert alert-warning">
                                    <a class="alert-link" >模块暂无</a>
                                </div>
                                <div class="alert alert-info">
                                    <a class="alert-link">模块暂无</a>.
                                </div>
                                <div class="alert alert-danger">
                                    <a class="alert-link" >模块暂无</a>.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        
                        <button class="btn btn-w-m btn-primary" type="submit">确认修改</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button  class="btn btn-w-m btn-default" type="button">保存草稿</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <script src="/0802/blog0802/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/0802/blog0802/Public/Admin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/0802/blog0802/Public/Admin/js/content.min.js?v=1.0.0"></script>
    <script src="/0802/blog0802/Public/Admin/js/plugins/summernote/summernote.min.js"></script>
    <script src="/0802/blog0802/Public/Admin/js/plugins/summernote/summernote-zh-CN.js"></script>

    <script type="text/javascript" src="/0802/blog0802/Public/Public/layer/jquery.form.js"></script>
    <script type="text/javascript" src="/0802/blog0802/Public/Public/layer/layer.js"></script>
    <script>
        $(document).ready(function(){$(".summernote").summernote({lang:"zh-CN",height:610})});var edit=function(){$("#eg").addClass("no-padding");$(".click2edit").summernote({lang:"zh-CN",focus:true})};var save=function(){$("#eg").removeClass("no-padding");var aHTML=$(".click2edit").code();$(".click2edit").destroy()};
    </script>
    <script type="text/javascript">
        $(function(){
            var optinos = {
                url: "<?php echo U('Article/ArticleEdit');?>",
                type: "post",
                dataType:'json',
                success:function(res){
                    if(res.error == 0){
                        layer.msg(res.msg);
                        window.location="<?php echo U('Article/lists');?>";
                    }else{
                        layer.msg(res.msg);
                    }
                }
            };
            $('#myform').ajaxForm(optinos);
        });
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>