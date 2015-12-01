<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstituicoesHasTiposDoacoes Controller
 *
 * @property \App\Model\Table\InstituicoesHasTiposDoacoesTable $InstituicoesHasTiposDoacoes
 */
class InstituicoesHasTiposDoacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('instituicoesHasTiposDoacoes', $this->paginate($this->InstituicoesHasTiposDoacoes));
        $this->set('_serialize', ['instituicoesHasTiposDoacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituicoes Has Tipos Doaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituicoesHasTiposDoaco = $this->InstituicoesHasTiposDoacoes->get($id, [
            'contain' => []
        ]);
        $this->set('instituicoesHasTiposDoaco', $instituicoesHasTiposDoaco);
        $this->set('_serialize', ['instituicoesHasTiposDoaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($novo)
    {
        $instituicoesHasTiposDoaco = $novo;
        $this->InstituicoesHasTiposDoacoes->save($instituicoesHasTiposDoaco);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituicoes Has Tipos Doaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituicoesHasTiposDoaco = $this->InstituicoesHasTiposDoacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituicoesHasTiposDoaco = $this->InstituicoesHasTiposDoacoes->patchEntity($instituicoesHasTiposDoaco, $this->request->data);
            if ($this->InstituicoesHasTiposDoacoes->save($instituicoesHasTiposDoaco)) {
                $this->Flash->success(__('The instituicoes has tipos doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituicoes has tipos doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituicoesHasTiposDoaco'));
        $this->set('_serialize', ['instituicoesHasTiposDoaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituicoes Has Tipos Doaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituicoesHasTiposDoaco = $this->InstituicoesHasTiposDoacoes->get($id);
        if ($this->InstituicoesHasTiposDoacoes->delete($instituicoesHasTiposDoaco)) {
            $this->Flash->success(__('The instituicoes has tipos doaco has been deleted.'));
        } else {
            $this->Flash->error(__('The instituicoes has tipos doaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
