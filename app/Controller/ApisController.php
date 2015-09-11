<?php
App::uses('AppController', 'Controller');
/**
 * Plans Controller
 *
 * @property Plan $Plan
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ApisController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session', 'RequestHandler');

	public $uses = array('Plan','Spot');



public function plan_name(){
	 //$this->RequestHandler->setCotent('json','application/json');
	 $this->set('posts', $this->Plan->find('all'));
     $this->set('_serialize', array('posts'));
}

public function spot_name(){
	 $id = $this->request->query['id'];
	 $this->set('posts', $this->Spot->find('all',['conditins' =>['Plan.id'=>$id]]));
     $this->set('_serialize', array('posts'));
}

public function spot_detail(){
	 $id = $this->request->query['id'];
	 $this->set('posts', $this->Spot->find('all',['conditins' =>['Spot.id'=>$id]]));
     $this->set('_serialize', array('posts'));
}

}