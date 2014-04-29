<?php
App::uses('AppModel', 'Model');
/**
 * Estate Model
 *
 * @property Owner $Owner
 * @property Renter $Renter
 */
class Estate extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Owner' => array(
			'className' => 'Owner',
			'foreignKey' => 'owner_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Renter' => array(
			'className' => 'Renter',
			'foreignKey' => 'renter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
