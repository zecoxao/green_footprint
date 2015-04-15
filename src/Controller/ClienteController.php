<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cliente Controller
 *
 * @property \App\Model\Table\ClienteTable $Cliente
 */
class ClienteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cliente', $this->paginate($this->Cliente));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Cliente->get($id, [
            'contain' => []
        ]);
        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Cliente->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Cliente->patchEntity($cliente, $this->request->data);
            if ($this->Cliente->save($cliente)) {
                $this->Flash->success('The cliente has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The cliente could not be saved. Please, try again.');
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Cliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Cliente->patchEntity($cliente, $this->request->data);
            if ($this->Cliente->save($cliente)) {
                $this->Flash->success('The cliente has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The cliente could not be saved. Please, try again.');
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Cliente->get($id);
        if ($this->Cliente->delete($cliente)) {
            $this->Flash->success('The cliente has been deleted.');
        } else {
            $this->Flash->error('The cliente could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
