<?php

class ProductsController extends AppController{

	public $uses = array('Category', 'Product');

	public function index($cat_id = null){
		if(is_null($cat_id)){
			$categories = $this->Category->find('all', array(
				'conditions' => array('parent_id' => 0)
				));
			

			$this->set(compact('categories'));
		}
	}

	public function view($cat_id = null){
		$child_cats = $this->Category->find('all', array(
				'conditions' => array('parent_id' => $cat_id)
				));
		$parent_cat = $this->Category->find('all', array(
			'conditions' => array('id' => $cat_id)
			));
		// $products = $this->Category->find('all');
	$ids = $this->__ids($child_cats);
		$ids = explode(",", $ids);
		$ids = array_diff($ids, array(''));
		$products = $this->Product->find('all', array(
			'conditions' => array('Product.category_id' => $ids)
			));
		// debug($ids);
		$this->set(compact('child_cats', 'parent_cat', 'products'));
	}

	protected function __ids($child_cats){
		$data = '';
		foreach($child_cats as $cat){
			// if($cat[''])
			$data .= $cat['Category']['id'] . ',';
		}
		return $data;
	}

}