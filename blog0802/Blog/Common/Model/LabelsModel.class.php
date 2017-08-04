<?php
	namespace Common\Model;
	use Think\Model;

	class LabelsModel extends Model
	{
		
		public function fetchAll(){
			return $this->select();
		}
	}