<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipamento Controller
 *
 * @property \App\Model\Table\EquipamentoTable $Equipamento
 */
class EquipamentoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('equipamento', $this->paginate($this->Equipamento));
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipamento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipamento = $this->Equipamento->get($id, [
            'contain' => []
        ]);
        $this->set('equipamento', $equipamento);
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipamento = $this->Equipamento->newEntity();
        if ($this->request->is('post')) {
            $equipamento = $this->Equipamento->patchEntity($equipamento, $this->request->data);
            if ($this->Equipamento->save($equipamento)) {
                $this->Flash->success('The equipamento has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equipamento could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equipamento'));
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipamento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipamento = $this->Equipamento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipamento = $this->Equipamento->patchEntity($equipamento, $this->request->data);
            if ($this->Equipamento->save($equipamento)) {
                $this->Flash->success('The equipamento has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The equipamento could not be saved. Please, try again.');
            }
        }
        $this->set(compact('equipamento'));
        $this->set('_serialize', ['equipamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipamento id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipamento = $this->Equipamento->get($id);
        if ($this->Equipamento->delete($equipamento)) {
            $this->Flash->success('The equipamento has been deleted.');
        } else {
            $this->Flash->error('The equipamento could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
