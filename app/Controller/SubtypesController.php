<?php
App::uses('AppController', 'Controller');
/**
 * Subtypes Controller
 *
 * @property Subtype $Subtype
 * @property PaginatorComponent $Paginator
 */
class SubtypesController extends AppController {

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
		$this->Subtype->recursive = 0;
		$this->set('subtypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subtype->exists($id)) {
			throw new NotFoundException(__('Invalid subtype'));
		}
		$options = array('conditions' => array('Subtype.' . $this->Subtype->primaryKey => $id));
		$this->set('subtype', $this->Subtype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subtype->create();
			if ($this->Subtype->save($this->request->data)) {
				$this->Session->setFlash(__('The subtype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subtype could not be saved. Please, try again.'));
			}
		}
		$types = $this->Subtype->Type->find('list');
		$this->set(compact('types'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subtype->exists($id)) {
			throw new NotFoundException(__('Invalid subtype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subtype->save($this->request->data)) {
				$this->Session->setFlash(__('The subtype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subtype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subtype.' . $this->Subtype->primaryKey => $id));
			$this->request->data = $this->Subtype->find('first', $options);
		}
		$types = $this->Subtype->Type->find('list');
		$this->set(compact('types'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subtype->id = $id;
		if (!$this->Subtype->exists()) {
			throw new NotFoundException(__('Invalid subtype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subtype->delete()) {
			$this->Session->setFlash(__('The subtype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subtype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
