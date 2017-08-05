<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo U('Article/ArticleAdd');?>" enctype="multipart/form-data"
>
	<label for="">获奖证书</label>
		<input type="file" name="tit_img" value="">	
		<input type="submit" value="提交">
	</form>
</body>
</html>