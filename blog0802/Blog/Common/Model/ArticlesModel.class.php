<?php
	namespace Common\Model;
	use Think\Model;
	/**
	* 
	*/
	class ArticlesModel extends Model
	{
		public function countpage()
	    {
	        $count = $this->count();
	        $p = getpage($count,6);
	        return  $p->show();
	    }
	    public function fetchAll()
	    {
	        return  $this->alias('a')->join('lz_category b ON a.cat_id=b.cat_id')->page(I('get.p'))->order('a.read_num desc')->limit(6)->select();
	    }
	    public function hotArticle(){
	    	return $this->alias('a')->join('lz_category b ON a.cat_id=b.cat_id')->order('a.read_num desc')->limit(4)->select();
	    }
	    public function countpageCat($id)
	    {
	        $count = $this->where(array('cat_id' => $id))->count();
	        $p = getpage($count,2);
	        return  $p->show();
	    }
	     public function findOneArticle($id)
	    {
	        return $this->alias('a')->join('lz_category b ON a.cat_id = b.cat_id')->where('a.id = ' .$id)->find();
	    }
	    public function insertOneReadNum($id)
	    {
	       return $this->where(array('id' => $id))->setInc('read_num',1);
	    }

    	public function fetchAllCat($id)
	    {
	        return  $this->alias('a')->join('lz_category b ON a.cat_id=b.cat_id')->where(array('b.cat_id' => $id))->page(I('get.p'))->order('a.id desc')->limit(2)->select();
	    }
	    
		public function insertOne($post)
	    {
	       $data = $this->create($post);

	        if ($this->add($data)){

	           return ['error' => 0 ,'msg'=> '添加成功'];
	        }else{
	            return ['error' => 1 ,'msg'=> '添加失败'];
	        }
	    }
	    public function editOne($post){
	    	$data = $this->create($post);
	    	if ($this->where(array('id'=>$data['id']))->save($data)) {
	    		return ['error'=>0,'msg'=>'修改成功'];
	    	}else{
	    		return ['error'=>1,'msg'=>'修改失败'];
	    	}
	    }
	}