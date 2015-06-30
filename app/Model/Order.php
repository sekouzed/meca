<?php
App::uses('AppModel', 'Model');
/**
 * Order Model
 *
 * @property Operator $Operator
 * @property User $User
 * @property Tool $Tool
 */
class Order extends AppModel {


    public $virtualFields = array(
        'name' => 'CONCAT(Order.id, " / ", Order.ref_piece)'
    );
    public $displayField='name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'operator_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'status' => array(
            'valid' => array(
                'rule' => array('inList', array('new','validate')),
                'message' => 'Merci de rentrer un rôle valide',
                'allowEmpty' => false
            )
        )
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Operator' => array(
			'className' => 'Operator',
			'foreignKey' => 'operator_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Tool' => array(
			'className' => 'Tool',
			'joinTable' => 'orders_tools',
			'foreignKey' => 'order_id',
			'associationForeignKey' => 'tool_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
