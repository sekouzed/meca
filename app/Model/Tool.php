<?php
App::uses('AppModel', 'Model');
/**
 * Tool Model
 *
 * @property Subtype $Subtype
 * @property Stock $Stock
 * @property Order $Order
 */
class Tool extends AppModel {

    public $virtualFields = array(
        'name' => 'CONCAT(Tool.ref, " /Diameter ", Tool.diameter)'
    );
    public $displayField='name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'subtype_id' => array(
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
		'Subtype' => array(
			'className' => 'Subtype',
			'foreignKey' => 'subtype_id',
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
		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'tool_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Order' => array(
			'className' => 'Order',
			'joinTable' => 'orders_tools',
			'foreignKey' => 'tool_id',
			'associationForeignKey' => 'order_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

    public function getQuantityOfStatus($tool_id,$tool_status) {
        return count($this->OrdersTool->query('SELECT * FROM orders_tools WHERE orders_tools.tool_id='.$tool_id.' AND orders_tools.tool_status="'.$tool_status.'";'));
    }
    public function getQuantityTotal($tool_id) {
        $totalQuantity = $this->Stock->query("SELECT SUM( stocks.quantity ) AS quantity FROM stocks WHERE  stocks.tool_id =".$tool_id.";");
        return ($totalQuantity[0][0]['quantity'])? $totalQuantity[0][0]['quantity']:0;
    }

    public function updateQuantities($id) {

        $this->id = $id;
        if (!$this->exists()) {
            return false;
        }

        $totalInitial =$this->getQuantityTotal($id);

        $totalOutput =$this->getQuantityOfStatus($id,'output');
        $totalBroken =$this->getQuantityOfStatus($id,'broken');
        $totalToSharpen=$this->getQuantityOfStatus($id,'to_sharpen');

        $totalQuantity=$totalInitial-$totalToSharpen-$totalBroken;
        $totalAvailable=$totalQuantity-$totalOutput;

        $this->set('quantity_output',$totalOutput);
        $this->set('quantity_broken', $totalBroken);
        $this->set('quantity_to_sharpen', $totalToSharpen);
        $this->set('quantity_available', $totalAvailable);
        $this->set('quantity_total',$totalQuantity);
        $this->set('quantity_initial', $totalInitial);

        if ($this->save()) {
            return true;
        }

        return false;
    }

}
