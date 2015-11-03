<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposInstituicoes Controller
 *
 * @property \App\Model\Table\TiposInstituicoesTable $TiposInstituicoes
 */
class TiposInstituicoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tiposInstituicoes', $this->paginate($this->TiposInstituicoes));
        $this->set('_serialize', ['tiposInstituicoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Instituico id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposInstituico = $this->TiposInstituicoes->get($id, [
            'contain' => []
        ]);
        $this->set('tiposInstituico', $tiposInstituico);
        $this->set('_serialize', ['tiposInstituico']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposInstituico = $this->TiposInstituicoes->newEntity();
        if ($this->request->is('post')) {
            $tiposInstituico = $this->TiposInstituicoes->patchEntity($tiposInstituico, $this->request->data);
            if ($this->TiposInstituicoes->save($tiposInstituico)) {
                $this->Flash->success(__('The tipos instituico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos instituico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposInstituico'));
        $this->set('_serialize', ['tiposInstituico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Instituico id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposInstituico = $this->TiposInstituicoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposInstituico = $this->TiposInstituicoes->patchEntity($tiposInstituico, $this->request->data);
            if ($this->TiposInstituicoes->save($tiposInstituico)) {
                $this->Flash->success(__('The tipos instituico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos instituico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposInstituico'));
        $this->set('_serialize', ['tiposInstituico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Instituico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposInstituico = $this->TiposInstituicoes->get($id);
        if ($this->TiposInstituicoes->delete($tiposInstituico)) {
            $this->Flash->success(__('The tipos instituico has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos instituico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
