<?php
	namespace Common\Model;
	use Think\Model;
	/**
	* 
	*/
	class CategoryModel extends Model
	{
		public function insertOne($post){
			$data=$this->create($post);
			if ($this->add($data)) {
				return true;
			}else{
				return false;
			}
		}

		public function editOne($post){
			$data = $this->create($post);
			if ($this->where(array('cat_id'=>$data['cat_id']))->save($data)) {
				return true;
			}else{
				return false;
			}
		}
			
	
	}		
