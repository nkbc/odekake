<?php
App::uses('AppModel', 'Model');
/**
 * Plan Model
 *
 */
class Plan extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
//	Public $useTable = 'spots';
    public $hasMany = array(
         'PlanSpot' => array(
             'order' => 'sort'
					)
    );
	
	 public $actsAs = array(
	
	        'Search.Searchable'
	
	    );
	    
	
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
		$condition[1] = array(
			'PlanSpot.id' => $data['genre_id']
		);
	}
}
