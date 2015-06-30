<?php
App::uses('AppModel', 'Model');
/**
 * OrdersTool Model
 *
 * @property Order $Order
 * @property Tool $Tool
 */
class OrdersTool extends AppModel {

//    public $order = "OrdersTool.created Desc";
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'order_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tool_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
            'tool_status' => array(
                'valid' => array(
                    'rule' => array('inList', array('output', 'fine','broken', 'to_sharpen')),
                    'message' => 'Merci de rentrer un rôle valide',
                    'allowEmpty' => false
                )
            )
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tool' => array(
			'className' => 'Tool',
			'foreignKey' => 'tool_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    //afterSave(boolean $created, array $options = array())
    public function afterSave($created,$options = array()) {

        $options = array('conditions' => array('OrdersTool.' . $this->primaryKey => $this->data['OrdersTool']['id']));

        $ordersTool=$this->find('first', $options);

        $this->Tool->updateQuantities($ordersTool['Tool']['id']);

        return true;
    }
}
