<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstituicoesHasAreasAtuacoes Controller
 *
 * @property \App\Model\Table\InstituicoesHasAreasAtuacoesTable $InstituicoesHasAreasAtuacoes
 */
class InstituicoesHasAreasAtuacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('instituicoesHasAreasAtuacoes', $this->paginate($this->InstituicoesHasAreasAtuacoes));
        $this->set('_serialize', ['instituicoesHasAreasAtuacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituicoes Has Areas Atuaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituicoesHasAreasAtuaco = $this->InstituicoesHasAreasAtuacoes->get($id, [
            'contain' => []
        ]);
        $this->set('instituicoesHasAreasAtuaco', $instituicoesHasAreasAtuaco);
        $this->set('_serialize', ['instituicoesHasAreasAtuaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instituicoesHasAreasAtuaco = $this->InstituicoesHasAreasAtuacoes->newEntity();
        if ($this->request->is('post')) {
            $instituicoesHasAreasAtuaco = $this->InstituicoesHasAreasAtuacoes->patchEntity($instituicoesHasAreasAtuaco, $this->request->data);
            if ($this->InstituicoesHasAreasAtuacoes->save($instituicoesHasAreasAtuaco)) {
                $this->Flash->success(__('The instituicoes has areas atuaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has areas atuaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasAreasAtuaco'));
        $this->set('_serialize', ['instituicoesHasAreasAtuaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituicoes Has Areas Atuaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituicoesHasAreasAtuaco = $this->InstituicoesHasAreasAtuacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituicoesHasAreasAtuaco = $this->InstituicoesHasAreasAtuacoes->patchEntity($instituicoesHasAreasAtuaco, $this->request->data);
            if ($this->InstituicoesHasAreasAtuacoes->save($instituicoesHasAreasAtuaco)) {
                $this->Flash->success(__('The instituicoes has areas atuaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has areas atuaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasAreasAtuaco'));
        $this->set('_serialize', ['instituicoesHasAreasAtuaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituicoes Has Areas Atuaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituicoesHasAreasAtuaco = $this->InstituicoesHasAreasAtuacoes->get($id);
        if ($this->InstituicoesHasAreasAtuacoes->delete($instituicoesHasAreasAtuaco)) {
            $this->Flash->success(__('The instituicoes has areas atuaco has been deleted.'));
        } else {
            $this->Flash->error(__('The instituicoes has areas atuaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
