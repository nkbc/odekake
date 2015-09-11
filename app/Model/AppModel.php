<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	public $filterArgs = array(

        'keyword' => array(

            'type' => 'like',

            'field' => array('Plan.name', 'Plan.start')

        ),
        
         'genre_id' => array(
         'type' => 'query',
         'method' => 'findByGenre'
        ),


    );
    
	public function findByGenre($data = array()) {
//
/* */	$spot_id = [];
		$options = array(
			'conditions' => array(
				'Spot.genre_id' => $data['genre_id']
			)
		);
		$datas = $this->PlanSpot->Spot->find('all', $options);
		
		foreach($datas as $key => $values){
			$spot_id[] = $values['Spot']['id'];
		}
		
		//plan_spot
		$plan_id = []; //array()
		$options = array(
			'conditions' => array(
				'PlanSpot.spot_id' => $spot_id
			)
		);
		
		$datas = $this->PlanSpot->find('all', $options);
		
		foreach($datas as $key => $values){
			$plan_id[] = $values['PlanSpot']['plan_id'];
		}
		
		$condition = [
			'AND' => [
				'Plan.id' => $plan_id
			]
		];
		
		return $condition;
	}
}
