<?php
App::uses('AppController', 'Controller');
/**
 * Operators Controller
 *
 * @property Operator $Operator
 * @property PaginatorComponent $Paginator
 */
class OperatorsController extends AppController {

    public function isAuthorized($user) {
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
		$this->Operator->recursive = 0;
		$this->set('operators', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Operator->exists($id)) {
			throw new NotFoundException(__('Invalid operator'));
		}
		$options = array('conditions' => array('Operator.' . $this->Operator->primaryKey => $id));
		$this->set('operator', $this->Operator->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Operator->create();
			if ($this->Operator->save($this->request->data)) {
				$this->Session->setFlash(__('The operator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operator could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Operator->exists($id)) {
			throw new NotFoundException(__('Invalid operator'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Operator->save($this->request->data)) {
				$this->Session->setFlash(__('The operator has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operator could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Operator.' . $this->Operator->primaryKey => $id));
			$this->request->data = $this->Operator->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Operator->id = $id;
		if (!$this->Operator->exists()) {
			throw new NotFoundException(__('Invalid operator'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Operator->delete()) {
			$this->Session->setFlash(__('The operator has been deleted.'));
		} else {
			$this->Session->setFlash(__('The operator could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
