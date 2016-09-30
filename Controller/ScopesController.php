<?php
App::uses('AppController', 'Controller');
/**
 * Scopes Controller
 *
 * @property Scope $Scope
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ScopesController extends AppController {

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
		$this->Scope->recursive = 0;
		$scopes = $this->Scope->find('all', array(
				'order' => 'Scope.ambito'
			));
		$this->set('scopes', $scopes);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Scope->exists($id)) {
			throw new NotFoundException(__('Invalid scope'));
		}
		$options = array('conditions' => array('Scope.' . $this->Scope->primaryKey => $id));
		$this->set('scope', $this->Scope->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Scope->create();
			if ($this->Scope->save($this->request->data)) {
				$this->Flash->success(__('El Ambito ha sido creado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Ha ocurrido un error, favor vuelve a intentarlo!'));
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
		if (!$this->Scope->exists($id)) {
			throw new NotFoundException(__('Invalid scope'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Scope->save($this->request->data)) {
				$this->Flash->success(__('El Ambito ha sido editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Ha ocurrido un error, favor vuelve a intentarlo!'));
			}
		} else {
			$options = array('conditions' => array('Scope.' . $this->Scope->primaryKey => $id));
			$this->request->data = $this->Scope->find('first', $options);
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
		$this->Scope->id = $id;
		if (!$this->Scope->exists()) {
			throw new NotFoundException(__('Invalid scope'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Scope->delete()) {
			$this->Flash->success(__('El Ambito ha sido eliminado.'));
		} else {
			$this->Flash->error(__('Ha ocurrido un error, favor vuelve a intentarlo!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
