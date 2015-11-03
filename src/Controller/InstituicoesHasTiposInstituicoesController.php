<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstituicoesHasTiposInstituicoes Controller
 *
 * @property \App\Model\Table\InstituicoesHasTiposInstituicoesTable $InstituicoesHasTiposInstituicoes
 */
class InstituicoesHasTiposInstituicoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('instituicoesHasTiposInstituicoes', $this->paginate($this->InstituicoesHasTiposInstituicoes));
        $this->set('_serialize', ['instituicoesHasTiposInstituicoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituicoes Has Tipos Instituico id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituicoesHasTiposInstituico = $this->InstituicoesHasTiposInstituicoes->get($id, [
            'contain' => []
        ]);
        $this->set('instituicoesHasTiposInstituico', $instituicoesHasTiposInstituico);
        $this->set('_serialize', ['instituicoesHasTiposInstituico']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instituicoesHasTiposInstituico = $this->InstituicoesHasTiposInstituicoes->newEntity();
        if ($this->request->is('post')) {
            $instituicoesHasTiposInstituico = $this->InstituicoesHasTiposInstituicoes->patchEntity($instituicoesHasTiposInstituico, $this->request->data);
            if ($this->InstituicoesHasTiposInstituicoes->save($instituicoesHasTiposInstituico)) {
                $this->Flash->success(__('The instituicoes has tipos instituico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has tipos instituico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasTiposInstituico'));
        $this->set('_serialize', ['instituicoesHasTiposInstituico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituicoes Has Tipos Instituico id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituicoesHasTiposInstituico = $this->InstituicoesHasTiposInstituicoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituicoesHasTiposInstituico = $this->InstituicoesHasTiposInstituicoes->patchEntity($instituicoesHasTiposInstituico, $this->request->data);
            if ($this->InstituicoesHasTiposInstituicoes->save($instituicoesHasTiposInstituico)) {
                $this->Flash->success(__('The instituicoes has tipos instituico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has tipos instituico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasTiposInstituico'));
        $this->set('_serialize', ['instituicoesHasTiposInstituico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituicoes Has Tipos Instituico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituicoesHasTiposInstituico = $this->InstituicoesHasTiposInstituicoes->get($id);
        if ($this->InstituicoesHasTiposInstituicoes->delete($instituicoesHasTiposInstituico)) {
            $this->Flash->success(__('The instituicoes has tipos instituico has been deleted.'));
        } else {
            $this->Flash->error(__('The instituicoes has tipos instituico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
