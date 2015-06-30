<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController {

    public function isAuthorized($user) {
        if (isset($user['role'])) {

            if ($user['role'] === 'issuer') {
                return true;
            }

            if ($user['role'] === 'storekeeper') {

                if ($this->action === 'validation' || $this->action === 'view' || $this->action === 'index') {
                    return true;
                }
            }
        }

        return parent::isAuthorized($user);
    }
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Order->create();
            $this->request->data['Order']['user_id'] = $this->Auth->user('id');
            if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$operators = $this->Order->Operator->find('list');
		$users = $this->Order->User->find('list');
		$tools = $this->Order->Tool->find('list', array(
            'conditions' => array('Tool.quantity_available >' =>0)
        ));
		$this->set(compact('operators', 'users', 'tools'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
            $this->request->data['Order']['user_id'] = $this->Auth->user('id');
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$operators = $this->Order->Operator->find('list');
		$users = $this->Order->User->find('list');
        $tools = $this->Order->Tool->find('list', array(
            'conditions' => array('Tool.quantity_available >' =>0)
        ));
		$this->set(compact('operators', 'users', 'tools'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('The order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function validation($id = null) {

        $this->Order->id = $id;
        if (!$this->Order->exists()) {
            throw new NotFoundException(__('Invalid order'));
        }

        $options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
        $order=$this->Order->find('first', $options);

        $this->Order->set('status', 'validate');

        if ($this->Order->save()) {

            foreach($order['Tool'] as $tool){
                $this->Order->OrdersTool->save(array(
                    'OrdersTool' => array(
                        'id' => $tool['OrdersTool']['id'],
                        'tool_status' => 'output'
                    )
                ));
                $this->Order->Tool->updateQuantities($tool['id']);
            }
            $this->Session->setFlash(__('The order has been saved.'));
            return $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('The order could not be saved. Please, try again.'));
        }

		return $this->redirect(array('action' => 'index'));
	}
}
