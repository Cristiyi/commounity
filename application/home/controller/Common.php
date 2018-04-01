<?php


namespace app\home\controller;
use think\Controller;
use think\Request;
use app\admin\model\Category;
use app\admin\model\Resourse;

class Common extends Controller {

	public function header () {

		$request = Request::instance();

		$category = new Category();

		$resourse = new Resourse();

		$pcat = $category -> where('pid',0) -> select();

		$childcat = $category -> where('pid','neq',0) -> select();

		$this -> assign('childcat', $childcat);
		
		$this -> assign('pcat', $pcat);

		return $this -> view -> fetch();

	}

}