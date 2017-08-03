<?php
	namespace Admin\Controller;
	use Think\Controller;
	/**
	* 
	*/
	class ArticleController extends Controller
	{
		
		public function lists(){		
			$ArticlesModel = D('Articles');
			$count = $ArticlesModel->count();
			$Page = new\Think\Page($count,6);
			$Page->setConfig('prev', '上一页');
			$Page->setConfig('next', '下一页');
			$Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
			$show = $Page->show();
			$list = $ArticlesModel->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);
        	$this->display();
		}
		public function add(){
			$this->display();
		}
	}