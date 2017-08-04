<?php 
namespace Home\Widget;
use Think\Controller;

class LayoutWidget extends Controller
{

    public function top()
    {
        /*$category = D('Category')->fetchAll();
        $this->assign('cat',$category);*/
        $this->display('Layout:top');
	}

    public function left()
    {
         $CateModel =D('Category');
        $res=$CateModel->fetchAll();
        $this->assign('cats',$res);
        $LabelModel = D('Labels');
        $labels = $LabelModel->fetchAll();
        $this->assign('labels',$labels);
        /*$readTop = D('Articles')->getArticleDescRead();
        $this->assign('list',$readTop);
        $links = D('Links')->fetchAll();
        $this->assign('links',$links);

        $labels = D('Labels')->fetchAll();
        $this->assign('labels',$labels);*/
        $this->display('Layout:left');
	}

    public function recomment()
    {

        /*$Recomment = D('Articles')-> getArticleRecomment();
        $data = $Recomment['content'];
        $content =  cutArticle($data);
        $this->assign('list',$Recomment);
        $this->assign('content',$content);*/
        $this->display('Layout:recomment');
	}

    public function article()
    {
        $ArticlesModel = D('Articles');
        $list =  $ArticlesModel ->fetchAll();
        $show =  $ArticlesModel ->countpage();
        $this->assign('list',$list);
        $this->assign('pages',$show);
        $this->display('Layout:article');
	}

    public function articleCat()
    {
        
        /*$id = I('get.id');
        $ArticlesModel = D('Articles');
        $list =  $ArticlesModel ->fetchAllCat($id);
        $show =  $ArticlesModel ->countpageCat($id);
        $this->assign('list',$list);
        $this->assign('pages',$show);*/
        $this->display('Layout:article');
    }

    public function recommentarticle()
    {
        /*$Recomment = D('Articles')-> findFiveArticle();
        $this->assign('list',$Recomment);*/
        //dump($Recomment);die;
        $this->display('Layout:recommentarticle');
        
    }

    public function likeall()
    {
        /*$like = I('post.like');
        $list = D('Articles')->likeAll($like);
        //dump($list);die;
        $this->assign('list',$list);*/
        $this->display('Layout:likeall');
    }

    public function likeget()
    {
        /*$like = I('get.like');
        $list = D('Articles')->likeAll($like);
        //dump($list);die;
        $this->assign('list',$list);*/
        $this->display('Layout:likeall');
    }
}

 ?>