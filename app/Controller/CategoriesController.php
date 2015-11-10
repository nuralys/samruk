<?php

class CategoriesController extends AppController{

	public $uses = array('Category', 'Product');

	public function index($cat_id = null){
		$title_for_layout = 'Продукция';
		if(is_null($cat_id)){
			$categories = $this->Category->find('all', array(
				'conditions' => array('parent_id' => 0)
				));
			
			$this->set(compact('categories', 'title_for_layout'));
		}
	}
	
	public function view($cat_id = null){
		$child_cats = $this->Category->find('all', array(
				'conditions' => array('parent_id' => $cat_id)
				));
		$parent_cat = $this->Category->find('all', array(
			'conditions' => array('id' => $cat_id)
			));
		$ids = $this->__ids($child_cats);
		$ids = explode(",", $ids);
		$ids = array_diff($ids, array(''));
		$products = $this->Product->find('all', array(
			'conditions' => array('Product.category_id' => $ids)
			));
		 //debug($products);
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

	public function admin_index(){
		$categories = $this->Category->find('all');

			$this->set(compact('categories'));
	}

		public function admin_add(){
		if($this->request->is('post')){
			$this->Category->create();
			$data = $this->request->data['Category'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Category->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Category->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Category->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Category->id = $id;
			$data1 = $this->request->data['Category'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Category->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Category->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Category->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}