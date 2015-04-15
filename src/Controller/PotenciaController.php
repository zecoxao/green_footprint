<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Potencia Controller
 *
 * @property \App\Model\Table\PotenciaTable $Potencia
 */
class PotenciaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('potencia', $this->paginate($this->Potencia));
        $this->set('_serialize', ['potencia']);
    }

    /**
     * View method
     *
     * @param string|null $id Potencium id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $potencium = $this->Potencia->get($id, [
            'contain' => []
        ]);
        $this->set('potencium', $potencium);
        $this->set('_serialize', ['potencium']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $potencium = $this->Potencia->newEntity();
        if ($this->request->is('post')) {
            $potencium = $this->Potencia->patchEntity($potencium, $this->request->data);
            if ($this->Potencia->save($potencium)) {
                $this->Flash->success('The potencium has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The potencium could not be saved. Please, try again.');
            }
        }
        $this->set(compact('potencium'));
        $this->set('_serialize', ['potencium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Potencium id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $potencium = $this->Potencia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $potencium = $this->Potencia->patchEntity($potencium, $this->request->data);
            if ($this->Potencia->save($potencium)) {
                $this->Flash->success('The potencium has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The potencium could not be saved. Please, try again.');
            }
        }
        $this->set(compact('potencium'));
        $this->set('_serialize', ['potencium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Potencium id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $potencium = $this->Potencia->get($id);
        if ($this->Potencia->delete($potencium)) {
            $this->Flash->success('The potencium has been deleted.');
        } else {
            $this->Flash->error('The potencium could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
