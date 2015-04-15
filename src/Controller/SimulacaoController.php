<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Simulacao Controller
 *
 * @property \App\Model\Table\SimulacaoTable $Simulacao
 */
class SimulacaoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('simulacao', $this->paginate($this->Simulacao));
        $this->set('_serialize', ['simulacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Simulacao id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $simulacao = $this->Simulacao->get($id, [
            'contain' => []
        ]);
        $this->set('simulacao', $simulacao);
        $this->set('_serialize', ['simulacao']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $simulacao = $this->Simulacao->newEntity();
        if ($this->request->is('post')) {
            $simulacao = $this->Simulacao->patchEntity($simulacao, $this->request->data);
            if ($this->Simulacao->save($simulacao)) {
                $this->Flash->success('The simulacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The simulacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('simulacao'));
        $this->set('_serialize', ['simulacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Simulacao id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $simulacao = $this->Simulacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $simulacao = $this->Simulacao->patchEntity($simulacao, $this->request->data);
            if ($this->Simulacao->save($simulacao)) {
                $this->Flash->success('The simulacao has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The simulacao could not be saved. Please, try again.');
            }
        }
        $this->set(compact('simulacao'));
        $this->set('_serialize', ['simulacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Simulacao id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $simulacao = $this->Simulacao->get($id);
        if ($this->Simulacao->delete($simulacao)) {
            $this->Flash->success('The simulacao has been deleted.');
        } else {
            $this->Flash->error('The simulacao could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
