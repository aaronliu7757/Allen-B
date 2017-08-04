<?php
	namespace Home\Controller;
	use Think\Controller;
	/**
	* 
	*/
	class ArticlesController extends Controller
	{
		public function articleCat(){
			$id = I('get.cat_id');
			$ArticlesModel = D('Articles');
	        $list =  $ArticlesModel ->fetchAllCat($id);
	        if ($list==null) {
	        	$this->error('该分类下没有文章，请访问其他分类', U('Index/index'),1);} else {
	       
		        $show =  $ArticlesModel ->countpageCat($id);
		        $this->assign('list',$list);
		        $this->assign('pages',$show);
		        $this->display('Layout:article');
	         }
		}
		public function index(){
	        $id = I('get.id');
	        $ArticleModel = D('Articles');
	        $article = $ArticleModel ->findOneArticle($id);
	        $this->assign('article',$article);
	        $ArticleModel -> insertOneReadNum($id);

	        $this->display();
    	}
	}