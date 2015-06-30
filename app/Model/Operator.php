<?php
App::uses('AppModel', 'Model');
/**
 * Operator Model
 *
 * @property Order $Order
 */
class Operator extends AppModel {


    public $virtualFields = array(
        'name_reg' => 'CONCAT(Operator.name, "/Reg: ", Operator.regimental)'
    );
    public $displayField='name_reg';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'operator_id',
			'dependent' => true,
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
