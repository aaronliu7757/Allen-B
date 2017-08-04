<?php

	function getpage($count, $pagesize = 8) {
		$p = new Think\Page($count, $pagesize);
		$p -> setConfig('prev', '上一页');
		$p -> setConfig('next', '下一页');
		$p -> setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
		$p -> lastSuffix = false;
		return $p;
	}

	function checkSession(){
		if (session('id')=="" && session('username')=="") {
    		$url=U('Login/index');
    		echo "<script>alert('请先登录！')</script>";
    		echo"<script>window.location= '{$url}' ;</script>";
    		exit;
    	}else{
    		return 1;
    	}
	}

	function delFileByDir($dir) {
		$dh = opendir($dir);
		while ($file = readdir($dh)) {
			if ($file != "." && $file != "..") {

				$fullpath = $dir . "/" . $file;
				if (is_dir($fullpath)) {
					delFileByDir($fullpath);
				} else {
					unlink($fullpath);
				}
			}
		}
		closedir($dh);
	}
	function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)
	{
		if(function_exists("mb_substr")){
			if($suffix)
				return mb_substr($str, $start, $length, $charset)."...";
			else
				return mb_substr($str, $start, $length, $charset);
		}
		elseif(function_exists('iconv_substr')) {
			if($suffix)
				return iconv_substr($str,$start,$length,$charset)."...";
			else
				return iconv_substr($str,$start,$length,$charset);
		}
		$re['utf-8']   = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef]
	                  [x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";
		$re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";
		$re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";
		$re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";
		preg_match_all($re[$charset], $str, $match);
		$slice = join("",array_slice($match[0], $start, $length));
		if($suffix) return $slice."…";
		return $slice;
	}
	function cutArticle($data,$cut=0,$str="....")
		{

		    $data=strip_tags($data);//去除html标记
		    $pattern = "/&[a-zA-Z]+;/";//去除特殊符号
		    $data=preg_replace($pattern,'',$data);
		    if(!is_numeric($cut))
		        return $data;
		    if($cut>0)
		        $data=mb_strimwidth($data,0,$cut,$str);


		    return $data;
		}
?>