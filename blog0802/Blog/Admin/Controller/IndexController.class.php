<?php
	namespace Admin\Controller;
	use Think\Controller;

class IndexController extends Controller {
    function index(){
    	if (checkSession()) {
    		$this->display();
    	}   
    }
    
    public function delRun(){
        delFileByDir(APP_PATH.'Runtime/');
        $this->success('删除缓存成功！',U('index/index'));
    }
}