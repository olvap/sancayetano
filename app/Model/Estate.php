<?php
App::uses('AppModel', 'Model');

/**
 * Estate Model
 *
 * @property Owner $Owner
 * @property Renter $Renter
 */
class Estate extends AppModel {

	public $virtualFields = array(
		'renter_name' => 'SELECT P.name 
			FROM renters R, people P 
			WHERE Estate.renter_id = R.id
			AND R.person_id = P.id'
		, 'renter_cuit' => 'SELECT P.cuit
			FROM renters R, people P
			WHERE Estate.renter_id = R.id
			AND R.person_id = P.id'
		, 'renter_iva' => 'SELECT I.name 
			FROM renters R, people P, ivas I
			WHERE Estate.renter_id = R.id
			AND R.person_id = P.id
			AND P.iva_id = I.id'
		, 'renter_ivaId' => 'SELECT I.id 
			FROM renters R, people P, ivas I
			WHERE Estate.renter_id = R.id
			AND R.person_id = P.id
			AND P.iva_id = I.id'
		, 'owner_name' => 'SELECT P.name 
			FROM owners O, people P 
			WHERE Estate.owner_id = O.id
			AND O.person_id = P.id'
	);

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
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'owner' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contract_start' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Verifique la fecha',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contract_end' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Verifique la fecha',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
