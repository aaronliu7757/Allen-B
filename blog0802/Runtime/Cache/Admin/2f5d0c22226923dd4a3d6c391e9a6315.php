<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H+ 后台主题UI框架 - Bootstrap Table</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/0802/blog0802/Public/Admin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/0802/blog0802/Public/Admin/css/style.min.css?v=4.0.0" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox float-e-margins">
        <div class="col-sm-12">
            <!-- Example Events -->
            <div class="example-wrap">
                <div class="example">
                    <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                        <button type="button" class="btn btn-outline btn-default">
                            <i class="glyphicon glyphicon-plus" aria-hidden="true"> 发布文章</i>
                        </button>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ibox float-e-margins">

                                <div class="ibox-content">

                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline"
                                         role="grid">

                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <input type="text" placeholder="查找文章" class="input form-control">
                                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-default"> <i class="fa fa-search"></i> 搜索</button>
                                </span>
                                                </div>
                                            </div>
                                    </div>

                                    <hr />

                                        <table class="table table-striped table-bordered table-hover dataTables-example dataTable"
                                               id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                            <tr role="row">
                                                <th>文章ID</th>
                                                <th>文章标题</th>
                                                <th>发表时间</th>
                                                <th>阅读量</th>
                                                <th>操作</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articles): $mod = ($i % 2 );++$i;?><tr class="gradeA even">
                                                    <td class="sorting_1"><?php echo ($articles["id"]); ?></td>
                                                    <td class=" "><?php echo ($articles["title"]); ?></td>
                                                    <!-- <td class=" "><?php echo (msubstr($articles["content"],0,20,'utf-8',true)); ?></td> -->
                                                    <td class="center "><?php echo ($articles["date"]); ?></td>
                                                    <td class="center "><?php echo ($articles["read_num"]); ?></td>
                                                    <td class="center ">删除 修改</td>
                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </tbody>

                                        </table>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="dataTables_info" id="DataTables_Table_0_info" role="alert"
                                                     aria-live="polite" aria-relevant="all">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                     id="DataTables_Table_0_paginate">
                                                    
                                                    <ul class="pages">
                                                        <?php echo ($page); ?>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- <ul class="pages">
            <?php echo ($page); ?>
        </ul> -->
            <!-- End Example Events -->
        </div>
    </div>
</div>
</div>
<!-- End Panel Other -->
</div>
<script src="/0802/blog0802/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/0802/blog0802/Public/Admin/js/bootstrap.min.js?v=3.3.5"></script>
<script src="/0802/blog0802/Public/Admin/js/content.min.js?v=1.0.0"></script>
<script src="/0802/blog0802/Public/Admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/0802/blog0802/Public/Admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/0802/blog0802/Public/Admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="/0802/blog0802/Public/Admin/js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>

</html>