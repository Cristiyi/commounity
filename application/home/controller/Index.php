<?php


namespace app\home\controller;
use think\Controller;
use think\Request;
use app\admin\model\Category;
use app\admin\model\Resourse;

class Index extends Controller {

	public function index () {

		$request = Request::instance();

		$category = new Category();

		$resourse = new Resourse();

		$pcat = $category -> where('pid',0) -> select();

		$childcat = $category -> where('pid','neq',0) -> select();

		$this -> assign('childcat', $childcat);
		
		$this -> assign('pcat', $pcat);

		if(input('param.cate_id')) {

			$cate_id = input('param.cate_id');

			if($cate_id == 1 || $cate_id == 2 || $cate_id == 3) {
				
				$current_cate = $category -> where('pid', $cate_id) -> select();

				foreach($current_cate as $key => $value) {

					$result[] = $resourse -> where('category_id', $value['id']) -> order('id desc') -> select();

				}


			} else {

				$result = $resourse -> where('category_id', $cate_id) -> order('id desc') -> select();

			}
 
		} else {

			$result = $resourse -> where('state','neq','0') -> order('id desc') -> select();

		}

		$this -> assign('result', $result);

		return $this -> view -> fetch();
	}

	public function detail() {

		$category = new Category();

		$resourse = new Resourse();

		$pcat = $category -> where('pid',0) -> select();

		$childcat = $category -> where('pid','neq',0) -> select();

		$this -> assign('childcat', $childcat);
		
		$this -> assign('pcat', $pcat);

		$re_id = input('param.re_id');

		$resourse = new Resourse();

		$detail = $resourse -> where('id', $re_id) -> find();

		$detail['images'] = explode(",",$detail['images']);

		$this -> assign('detail', $detail);

		return $this -> view -> fetch();

	}

}