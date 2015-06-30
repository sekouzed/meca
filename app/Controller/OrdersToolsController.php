<?php
App::uses('AppController', 'Controller');
/**
 * OrdersTools Controller
 *
 * @property OrdersTool $OrdersTool
 * @property PaginatorComponent $Paginator
 */
class OrdersToolsController extends AppController {

    public function isAuthorized($user) {
        if (isset($user['role']) && $user['role'] === 'storekeeper') {
            return true;
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
		$this->OrdersTool->recursive = 2;
		$this->OrdersTool->group =array('OrdersTool.order_id');

//        debug($this->Paginator->paginate());die();

        $this->set('ordersTools', $this->Paginator->paginate());
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrdersTool->exists($id)) {
			throw new NotFoundException(__('Invalid orders tool'));
		}
		if ($this->request->is(array('post', 'put'))) {
//                        debug($this->request->data);die();

            if ($this->OrdersTool->save($this->request->data)) {
				$this->Session->setFlash(__('The orders tool has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orders tool could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdersTool.' . $this->OrdersTool->primaryKey => $id));
			$this->request->data = $this->OrdersTool->find('first', $options);
		}

        $options = array('recursive' => 2,'conditions' => array('OrdersTool.' . $this->OrdersTool->primaryKey => $id));
        $this->set('ordersTools', $this->OrdersTool->find('first', $options));
	}



}
