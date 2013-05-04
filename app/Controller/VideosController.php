<?php
class VideosController extends AppController{
	
	/**
	* Permet d'afficher les vidéos
	**/
	function index(){
		$d['videos'] = $this->Video->find('all',array(
			'conditions'=>array('online'=>true)
		));
		$this->set($d);
	}

	/**
	* Permet d'afficher une video
	**/
	function show($id,$slug){
		$d['video'] = $this->Video->find('first',array(
			'conditions'=>array('id'=>$id,'slug'=>$slug)
		));
		$this->set($d);
	}

	/**
	* Permet de lister les vidéos dans le backoffice
	**/
	function admin_index(){
		$d['videos'] = $this->Video->find('all');
		$this->set($d);
	}	

	/**
	* Permet d'éditer une vidéo
	**/
	function admin_edit($id = null){
		if ($this->request->is('post') || $this->request->is('put')) {
			$d = $this->request->data;
			if ($this->Video->save($d,true,array('id','name','content','online'))) {
				$this->Session->setFlash("Sauvegarde effectuée.","notif",array('type'=>'success'));
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash("La sauvegarde a échouée","notif",array('type'=>'error'));
			}
		}elseif($id){
			$this->Video->id = $id;
			if ($this->Video->exists()) {
				$this->request->data = $this->Video->read();				
			}else{
				throw new NotFoundException("", 404);
				
			}
		}
	}	
}