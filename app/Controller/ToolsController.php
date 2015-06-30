<?php
App::uses('AppController', 'Controller');
/**
 * Tools Controller
 *
 * @property Tool $Tool
 * @property PaginatorComponent $Paginator
 */
class ToolsController extends AppController {

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
		$this->Tool->recursive = 0;
		$this->set('tools', $this->Paginator->paginate());
	}

//    public function search() {
//        $this->autoRender = false;
//        // get the search term from URL
//        $term = '';
//        if(isset($this->request->query['q']) )
//            $term =$this->request->query['q'];
//
//        $tools = $this->Tool->find('all',array(
//            'conditions' => array(
//                'Tool.ref LIKE' => '%'.$term.'%'
//            )
//        ));
//
//        // Format the result for select2
//        $result = array();
//        foreach($tools as $key => $tool) {
//            $result[$key]['id'] = (int) $tool['Tool']['id'];
//            $result[$key]['text'] = $tool['Tool']['ref'];
//        }
//        $tools = $result;
//
//        echo json_encode($tools);
//    }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tool->exists($id)) {
			throw new NotFoundException(__('Invalid tool'));
		}
		$options = array('conditions' => array('Tool.' . $this->Tool->primaryKey => $id));
        $this->set('tool', $this->Tool->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tool->create();
			if ($this->Tool->save($this->request->data)) {
				$this->Session->setFlash(__('The tool has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tool could not be saved. Please, try again.'));
			}
		}
		$subtypes = $this->Tool->Subtype->find('list');
		$orders = $this->Tool->Order->find('list');
		$this->set(compact('subtypes', 'orders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tool->exists($id)) {
			throw new NotFoundException(__('Invalid tool'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tool->save($this->request->data)) {
				$this->Session->setFlash(__('The tool has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tool could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tool.' . $this->Tool->primaryKey => $id));
			$this->request->data = $this->Tool->find('first', $options);
		}
		$subtypes = $this->Tool->Subtype->find('list');
		$orders = $this->Tool->Order->find('list');
		$this->set(compact('subtypes', 'orders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tool->id = $id;
		if (!$this->Tool->exists()) {
			throw new NotFoundException(__('Invalid tool'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tool->delete()) {
			$this->Session->setFlash(__('The tool has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tool could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
