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
		public function uploads(){
			$this->display();
		}
		public function ArticleAdd(){
				$upload = new \Think\Upload();
	   			$upload->maxSize =  3145728;
	   			$upload->exts = array('jpg','gif','png','jpeg');
	   			$upload->rootPath ='./Uploads/';
	   			$upload->savepath = '';
	   			$info =$upload->upload();
	   			if(!$info){
	   				$this->error($upload->getError());
	   			}else{
		   				$img_path1 ='./Uploads/'.$info['tit_img']['savepath'];
		   				$img_path2=$info['tit_img']['savename'];	   			
		    			$image =new \Think\Image();
		    			$image->open($img_path1.$img_path2);
		    			$img_thumb ='./Uploads/thumb/'.$img_path2;
		    			$image->thumb(220,150)->save($img_thumb);
		    			if (IS_AJAX){
				            $post = I('post.');
				            $post['tit_img']=ltrim($img_thumb,".");
				            $post['content'] = $_POST['articles'];
				            $post['date'] = date('Y-m-d H:i:s',time());
				            $ajax = D('Articles')->insertOne($post);
				            $this->ajaxReturn($ajax);		        
        				}else{
            				echo '文章添加失败';
            				unlink($img_thumb);
            				unlink($img_path1.$img_path2);
        				}
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