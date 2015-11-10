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
		// debug($product_id);
		$categories = $this->Category->find('all');
		$parent_cat = $this->Category->find('all', array(
			'conditions' => array('id' => $cat_id)
			));
		$parent_cat = $parent_cat[0]['Category']['parent_id'];
		$parent_cat_data = $this->Category->find('all', array(
			'conditions' => array('Category.id' => $parent_cat)
			));

		// $products = $this->Category->find('all');
		$ids = $this->__ids($categories, $parent_cat);
		$ids = explode(",", $ids);
		$ids = array_diff($ids, array(''));
		$neighbour_cats = $this->Category->find('all', array(
			'conditions' => array('Category.id' => $ids)
			));
		$products = $this->Product->find('all', array(
		 	'conditions' => array('Product.category_id' => $cat_id)
		 	));
		// debug($parent_cat);
		// debug($ids);
		$this->set(compact('parent_cat_data', 'neighbour_cats', 'products'));
	}

	protected function __ids($categories, $parent_cat){
		$data = '';
		foreach($categories as $cat){
			if($cat['Category']['parent_id'] == $parent_cat)
			$data .= $cat['Category']['id'] . ',';
		}
		return $data;
	}

	public function admin_index(){
		$products = $this->Product->find('all');

		$this->set(compact('products'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Product->create();
			$data = $this->request->data['Product'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Product->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		$c_list = $this->Category->find('list');
		$this->set(compact('c_list'));
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Product->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Product->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Product->id = $id;
			$data1 = $this->request->data['Product'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Product->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			$c_list = $this->Category->find('list');
			$this->set(compact('id', 'data', 'c_list'));
		}
	}

	public function admin_delete($id){
		if (!$this->Product->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Product->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}