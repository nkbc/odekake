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

	public $uses = array('Plan','Spot','PlanSpot');


    public function beforeFilter() {
        $this->Auth->allow('plan_name', 'spot_name', 'spot_detail');
    }


public function plan_name(){
	 //$this->RequestHandler->setCotent('json','application/json');
	 $this->set('posts', $this->Plan->find('all'));
     $this->set('_serialize', array('posts'));
}

public function spot_name(){
	$id = $this->request->query['id'];	
	$this->Plan->recursive = 2;
	$options = array('conditions' => array('Plan.' . $this->Plan->primaryKey => $id));
	$posts =$this->Plan->find('first', $options);
	$this->set('posts', $posts);
    $this->set('_serialize', array('posts'));
}

public function spot_detail(){
	 $id = $this->request->query['id'];
	 $this->set('posts', $this->Spot->find('first',['conditins' =>['Spot.id'=>$id]]));
     $this->set('_serialize', array('posts'));
}

}