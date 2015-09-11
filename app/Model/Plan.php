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
	public $actsAs = array('Filebinder.Bindable');
//	Public $useTable = 'spots';
    public $hasMany = array(
         'PlanSpot' => array(
             'order' => 'sort'
					)
    );




}
