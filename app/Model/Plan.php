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
	public $actsAs = array('Filebinder.Bindable','Search.Searchable');
	
//	Public $useTable = 'spots';
    public $hasMany = array(
         'PlanSpot' => array(
             'order' => 'sort'
					),
         // 'PlanUser' => array(
         //        'order' => 'user'
         //  )
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
	
	
}
