<?php
App::uses('AppController', 'Controller');
/**
 * Schools Controller
 *
 * @property School $School
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SchoolsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	public $layout = "vcm";

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->School->recursive = 0;
		$this->set('schools', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->School->exists($id)) {
			throw new NotFoundException(__('Invalid school'));
		}
		$options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
		$this->set('school', $this->School->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->School->create();
			if ($this->School->save($this->request->data)) {
				$this->Flash->success(__('The school has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The school could not be saved. Please, try again.'));
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
		if (!$this->School->exists($id)) {
			throw new NotFoundException(__('Invalid school'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->School->save($this->request->data)) {
				$this->Flash->success(__('The school has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The school could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('School.' . $this->School->primaryKey => $id));
			$this->request->data = $this->School->find('first', $options);
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
		$this->School->id = $id;
		if (!$this->School->exists()) {
			throw new NotFoundException(__('Invalid school'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->School->delete()) {
			$this->Flash->success(__('The school has been deleted.'));
		} else {
			$this->Flash->error(__('The school could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
