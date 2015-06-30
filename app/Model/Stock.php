<?php
App::uses('AppModel', 'Model');
/**
 * Stock Model
 *
 * @property Tool $Tool
 * @property User $User
 */
class Stock extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tool_id' => array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tool' => array(
			'className' => 'Tool',
			'foreignKey' => 'tool_id',
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


    //afterSave(boolean $created, array $options = array())
    public function afterSave($created,$options = array()) {

        $this->Tool->updateQuantities($this->data['Stock']['tool_id']);

        return true;
    }

}
