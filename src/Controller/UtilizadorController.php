<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Utilizador Controller
 *
 * @property \App\Model\Table\UtilizadorTable $Utilizador
 */
class UtilizadorController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('utilizador', $this->paginate($this->Utilizador));
        $this->set('_serialize', ['utilizador']);
    }

    /**
     * View method
     *
     * @param string|null $id Utilizador id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilizador = $this->Utilizador->get($id, [
            'contain' => []
        ]);
        $this->set('utilizador', $utilizador);
        $this->set('_serialize', ['utilizador']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utilizador = $this->Utilizador->newEntity();
        if ($this->request->is('post')) {
            $utilizador = $this->Utilizador->patchEntity($utilizador, $this->request->data);
            if ($this->Utilizador->save($utilizador)) {
                $this->Flash->success('The utilizador has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The utilizador could not be saved. Please, try again.');
            }
        }
        $this->set(compact('utilizador'));
        $this->set('_serialize', ['utilizador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilizador id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilizador = $this->Utilizador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilizador = $this->Utilizador->patchEntity($utilizador, $this->request->data);
            if ($this->Utilizador->save($utilizador)) {
                $this->Flash->success('The utilizador has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The utilizador could not be saved. Please, try again.');
            }
        }
        $this->set(compact('utilizador'));
        $this->set('_serialize', ['utilizador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilizador id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilizador = $this->Utilizador->get($id);
        if ($this->Utilizador->delete($utilizador)) {
            $this->Flash->success('The utilizador has been deleted.');
        } else {
            $this->Flash->error('The utilizador could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
