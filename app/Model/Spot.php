<?php
App::uses('AppModel', 'Model');


/**
 * Spot Model
 *
 * @property Genre $Genre
 */
class Spot extends AppModel {

public $bindFields = array(array( 'field' => 'image' ));

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $actsAs = array('Filebinder.Bindable');

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Genre' => array(
			'className' => 'Genre',
			'foreignKey' => 'genre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
