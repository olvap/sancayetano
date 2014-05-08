<?php
App::uses('AppModel', 'Model');
/**
 * Owner Model
 *
 * @property Person $Person
 * @property Estate $Estate
 */
class Owner extends AppModel {
	
	// public $displayField = 'name';
	
	// public $actsAs = array('Containable');

	// $this->$virtualField['name'] = $this->Person->name;


	public $virtualFields = array(
		// 'name' => "Person.name"
		'name' => 'SELECT name FROM people WHERE Owner.person_id = people.id'
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'person_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Estate' => array(
			'className' => 'Estate',
			'foreignKey' => 'owner_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
