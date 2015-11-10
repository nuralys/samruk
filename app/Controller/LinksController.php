<?php

class LinksController extends AppController{

	public function admin_index(){
		$links = $this->Link->find('all');
		
		$this->set(compact('links'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Link->create();
			$data = $this->request->data['Link'];
			// debug($data);
			 
			if($this->Link->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Link->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Link->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Link->id = $id;
			$data1 = $this->request->data['Link'];
			
			if($this->Link->save($data1)){
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
		if (!$this->Link->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Link->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		
		$title_for_layout = 'Новости';
		$links = $this->Link->find('all', array(
			'order' => array('created' => 'desc')
			));
		$this->set(compact('links', 'title_for_layout'));
	}


	
}