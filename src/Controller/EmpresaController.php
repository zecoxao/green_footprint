<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empresa Controller
 *
 * @property \App\Model\Table\EmpresaTable $Empresa
 */
class EmpresaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('empresa', $this->paginate($this->Empresa));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * View method
     *
     * @param string|null $id Empresa id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresa = $this->Empresa->get($id, [
            'contain' => []
        ]);
        $this->set('empresa', $empresa);
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresa = $this->Empresa->newEntity();
        if ($this->request->is('post')) {
            $empresa = $this->Empresa->patchEntity($empresa, $this->request->data);
            if ($this->Empresa->save($empresa)) {
                $this->Flash->success('The empresa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The empresa could not be saved. Please, try again.');
            }
        }
        $this->set(compact('empresa'));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresa id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresa = $this->Empresa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresa = $this->Empresa->patchEntity($empresa, $this->request->data);
            if ($this->Empresa->save($empresa)) {
                $this->Flash->success('The empresa has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The empresa could not be saved. Please, try again.');
            }
        }
        $this->set(compact('empresa'));
        $this->set('_serialize', ['empresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresa = $this->Empresa->get($id);
        if ($this->Empresa->delete($empresa)) {
            $this->Flash->success('The empresa has been deleted.');
        } else {
            $this->Flash->error('The empresa could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
