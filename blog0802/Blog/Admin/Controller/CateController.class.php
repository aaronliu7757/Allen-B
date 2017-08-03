<?php
	namespace Admin\Controller;
	use Think\Controller;
	/**
	* 
	*/
	class CateController extends Controller
	{
		
		public function lists(){
			$CatesModel = M('category');
			$count = $CatesModel->count();
			$Page = new\Think\Page($count,3);
			$Page->setConfig('prev', '上一页');
			$Page->setConfig('next', '下一页');
			$Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
			$show = $Page->show();
			$list = $CatesModel->order('cat_id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show);
        	$this->display();
		}
		public function add(){
			$this->display();
		}
		public function edit(){
			$cat_id=I('get.cat_id');
			$CateModel = D('Category');
			$res=$CateModel ->where(array('cat_id'=>$cat_id))->find();
			$this->assign('res',$res);
			$this->display();
		}

		public function CateAdd(){
			if (IS_POST) {
				$Post = I('post.');
				$CateModel = D('Category');
				if ($CateModel->insertOne($post)) {
					$this->success('操作完成',U('Cate/lists'),1);
				}else{
					$this->error('操作失败',U('Cate/add'),1);
				}

			}
		}

		public function CateDel(){
			$CateModel = D('Category');
			$cat_id = I('get.cat_id');
			if ($CateModel->where(array('cat_id'=>$cat_id))->delete()) {
				$this->success('删除成功','',1);
			}
		}

		public function CateEdit(){
			$post = I('post.');
			if (D('Category')->editOne($post)){
				$this->success('修改成功',U('Cate/lists'),1);
			}else{
				$this->error('修改失败','',1);
			}
		}
	}