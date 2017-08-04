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
			$data = D('Labels')->fetchAll();
			$this->assign('data',$data);
			$res = D('Category')->fetchAll();
			$this->assign('res',$res);
			$this->display();
		}

		public function edit(){
			$article_id=I('get.id');
			$data = D('Labels')->fetchAll();
			$this->assign('data',$data);
			$res = D('Category')->fetchAll();
			$this->assign('res',$res);
			$ArticleModel = D('Articles');
			$res=$ArticleModel ->where(array('id'=>$article_id))->find();
			$this->assign('article',$res);
			$this->display();
	
		}

		public function ArticleAdd(){
			if (IS_AJAX){
	            $post = I('post.');
	            $post['content'] = $_POST['articles'];
	            $post['date'] = date('Y-m-d H:i:s',time());
	            $ajax = D('Articles')->insertOne($post);
	            $this->ajaxReturn($ajax);
        	}else{
            	echo '文章添加失败';
        	}
		}

		public function ArticleDel(){
			$ArticleModel = D('Articles');
			$id = I('get.id');
			if ($ArticleModel->where(array('id'=>$id))->delete()) {
				$this->success('删除成功','',1);
			}
		}

		public function ArticleEdit(){
			if (IS_AJAX) {
				$post = I('post.');
				$post['content'] = $_POST['articles'];
	            $post['date'] = date('Y-m-d H:i:s',time());
	            $ajax = D('Articles')->editOne($post);
	            $this->ajaxReturn($ajax);
			}else{
				echo "没有上传修改的文章";
			}
		}
	}