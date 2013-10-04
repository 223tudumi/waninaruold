<?php

class UsersController extends AppController{
	public $helpers = array('Html' , 'Form');
	
	public function admin_index(){
		$this->set('users' , $this->User->find('all'));
	}
	
	public function admin_userDetail($id = null){
		$this->User->id = $id;
		$this->set('user',$this->User->read());
	}
	
	public function admin_userRegist(){
		if($this->request->is('User')){
		$this->Session->setFlash('Success!');
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('Success!!');
				$this->redirect(array('action'=>'admin_index'));
			} else {
				$this->Session->setFlash('failed!');
			}
		}
	}
}

?>