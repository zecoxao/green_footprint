<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cae Controller
 *
 * @property \App\Model\Table\CaeTable $Cae
 */
class CaeController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('cae', $this->paginate($this->Cae));
        $this->set('_serialize', ['cae']);
    }

    /**
     * View method
     *
     * @param string|null $id Cae id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cae = $this->Cae->get($id, [
            'contain' => []
        ]);
        $this->set('cae', $cae);
        $this->set('_serialize', ['cae']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cae = $this->Cae->newEntity();
        if ($this->request->is('post')) {
            $cae = $this->Cae->patchEntity($cae, $this->request->data);
            if ($this->Cae->save($cae)) {
                $this->Flash->success('The cae has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The cae could not be saved. Please, try again.');
            }
        }
        $this->set(compact('cae'));
        $this->set('_serialize', ['cae']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cae id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cae = $this->Cae->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cae = $this->Cae->patchEntity($cae, $this->request->data);
            if ($this->Cae->save($cae)) {
                $this->Flash->success('The cae has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The cae could not be saved. Please, try again.');
            }
        }
        $this->set(compact('cae'));
        $this->set('_serialize', ['cae']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cae id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cae = $this->Cae->get($id);
        if ($this->Cae->delete($cae)) {
            $this->Flash->success('The cae has been deleted.');
        } else {
            $this->Flash->error('The cae could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
