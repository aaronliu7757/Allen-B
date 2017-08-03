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
    <form method="post" action="<?php echo U('Cate/CateEdit');?>" id="myform">
        <div class="row">
            <div class="col-sm-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title" >
                        <h5>修改分类</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>文章分类</h5>
                            <label class="col-sm-3 control-label">分类名</label>
                            <input type="text" class="form-control" placeholder="<?php echo ($res["cat_name"]); ?>" name="cat_name"><input type="hidden" name="cat_id" value="<?php echo ($res["cat_id"]); ?>" />  
                    </div>
                    </div>        
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                       <button class="btn btn-w-m btn-primary" type="submit">确认修改</button>
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
        /*$(function(){
            var o = {
                url: "<?php echo U('Cate/add');?>",
                type: "post",
                dataType:'json',
                success:function(res){
                    if(res.error == 0){
                        layer.msg(res.msg);
                    }else{
                        layer.msg(res.msg);
                    }
                }
            };
            $('#myform').ajaxForm(o);
        });*/
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>