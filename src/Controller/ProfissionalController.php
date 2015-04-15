<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profissional Controller
 *
 * @property \App\Model\Table\ProfissionalTable $Profissional
 */
class ProfissionalController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('profissional', $this->paginate($this->Profissional));
        $this->set('_serialize', ['profissional']);
    }

    /**
     * View method
     *
     * @param string|null $id Profissional id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profissional = $this->Profissional->get($id, [
            'contain' => []
        ]);
        $this->set('profissional', $profissional);
        $this->set('_serialize', ['profissional']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profissional = $this->Profissional->newEntity();
        if ($this->request->is('post')) {
            $profissional = $this->Profissional->patchEntity($profissional, $this->request->data);
            if ($this->Profissional->save($profissional)) {
                $this->Flash->success('The profissional has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The profissional could not be saved. Please, try again.');
            }
        }
        $this->set(compact('profissional'));
        $this->set('_serialize', ['profissional']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profissional id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profissional = $this->Profissional->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profissional = $this->Profissional->patchEntity($profissional, $this->request->data);
            if ($this->Profissional->save($profissional)) {
                $this->Flash->success('The profissional has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The profissional could not be saved. Please, try again.');
            }
        }
        $this->set(compact('profissional'));
        $this->set('_serialize', ['profissional']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profissional id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profissional = $this->Profissional->get($id);
        if ($this->Profissional->delete($profissional)) {
            $this->Flash->success('The profissional has been deleted.');
        } else {
            $this->Flash->error('The profissional could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
