<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Visita Controller
 *
 * @property \App\Model\Table\VisitaTable $Visita
 */
class VisitaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('visita', $this->paginate($this->Visita));
        $this->set('_serialize', ['visita']);
    }

    /**
     * View method
     *
     * @param string|null $id Visitum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $visitum = $this->Visita->get($id, [
            'contain' => []
        ]);
        $this->set('visitum', $visitum);
        $this->set('_serialize', ['visitum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $visitum = $this->Visita->newEntity();
        if ($this->request->is('post')) {
            $visitum = $this->Visita->patchEntity($visitum, $this->request->data);
            if ($this->Visita->save($visitum)) {
                $this->Flash->success('The visitum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The visitum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('visitum'));
        $this->set('_serialize', ['visitum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Visitum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $visitum = $this->Visita->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $visitum = $this->Visita->patchEntity($visitum, $this->request->data);
            if ($this->Visita->save($visitum)) {
                $this->Flash->success('The visitum has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The visitum could not be saved. Please, try again.');
            }
        }
        $this->set(compact('visitum'));
        $this->set('_serialize', ['visitum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Visitum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $visitum = $this->Visita->get($id);
        if ($this->Visita->delete($visitum)) {
            $this->Flash->success('The visitum has been deleted.');
        } else {
            $this->Flash->error('The visitum could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
