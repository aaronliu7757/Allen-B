<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $ArticlesModel = D('Articles');
        $list =  $ArticlesModel ->fetchAll();
        $hotArticles = $ArticlesModel->hotArticle();
        $show =  $ArticlesModel ->countpage();
        $this->assign('list',$list);
        $this->assign('pages',$show);
        $this->assign('hots',$hotArticles);
        //这种方式实现也可以
        /*$count = $ArticlesModel->count();
        $Page = new \Think\Page($count,5);
        $show = $Page->show();
        $list = $ArticlesModel->alias('a')->join('lz_category b ON a.cat_id=b.cat_id')->order('a.id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);
        $this->assign('pages',$show);*/
       
        $this->display();
    }
}