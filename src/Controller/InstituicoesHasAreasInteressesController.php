<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstituicoesHasAreasInteresses Controller
 *
 * @property \App\Model\Table\InstituicoesHasAreasInteressesTable $InstituicoesHasAreasInteresses
 */
class InstituicoesHasAreasInteressesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('instituicoesHasAreasInteresses', $this->paginate($this->InstituicoesHasAreasInteresses));
        $this->set('_serialize', ['instituicoesHasAreasInteresses']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituicoes Has Areas Interess id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituicoesHasAreasInteress = $this->InstituicoesHasAreasInteresses->get($id, [
            'contain' => []
        ]);
        $this->set('instituicoesHasAreasInteress', $instituicoesHasAreasInteress);
        $this->set('_serialize', ['instituicoesHasAreasInteress']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instituicoesHasAreasInteress = $this->InstituicoesHasAreasInteresses->newEntity();
        if ($this->request->is('post')) {
            $instituicoesHasAreasInteress = $this->InstituicoesHasAreasInteresses->patchEntity($instituicoesHasAreasInteress, $this->request->data);
            if ($this->InstituicoesHasAreasInteresses->save($instituicoesHasAreasInteress)) {
                $this->Flash->success(__('The instituicoes has areas interess has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has areas interess could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasAreasInteress'));
        $this->set('_serialize', ['instituicoesHasAreasInteress']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituicoes Has Areas Interess id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituicoesHasAreasInteress = $this->InstituicoesHasAreasInteresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituicoesHasAreasInteress = $this->InstituicoesHasAreasInteresses->patchEntity($instituicoesHasAreasInteress, $this->request->data);
            if ($this->InstituicoesHasAreasInteresses->save($instituicoesHasAreasInteress)) {
                $this->Flash->success(__('The instituicoes has areas interess has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has areas interess could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasAreasInteress'));
        $this->set('_serialize', ['instituicoesHasAreasInteress']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituicoes Has Areas Interess id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituicoesHasAreasInteress = $this->InstituicoesHasAreasInteresses->get($id);
        if ($this->InstituicoesHasAreasInteresses->delete($instituicoesHasAreasInteress)) {
            $this->Flash->success(__('The instituicoes has areas interess has been deleted.'));
        } else {
            $this->Flash->error(__('The instituicoes has areas interess could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
