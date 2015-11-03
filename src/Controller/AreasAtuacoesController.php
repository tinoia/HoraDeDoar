<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreasAtuacoes Controller
 *
 * @property \App\Model\Table\AreasAtuacoesTable $AreasAtuacoes
 */
class AreasAtuacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('areasAtuacoes', $this->paginate($this->AreasAtuacoes));
        $this->set('_serialize', ['areasAtuacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Areas Atuaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areasAtuaco = $this->AreasAtuacoes->get($id, [
            'contain' => []
        ]);
        $this->set('areasAtuaco', $areasAtuaco);
        $this->set('_serialize', ['areasAtuaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areasAtuaco = $this->AreasAtuacoes->newEntity();
        if ($this->request->is('post')) {
            $areasAtuaco = $this->AreasAtuacoes->patchEntity($areasAtuaco, $this->request->data);
            if ($this->AreasAtuacoes->save($areasAtuaco)) {
                $this->Flash->success(__('The areas atuaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areas atuaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areasAtuaco'));
        $this->set('_serialize', ['areasAtuaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Areas Atuaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areasAtuaco = $this->AreasAtuacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areasAtuaco = $this->AreasAtuacoes->patchEntity($areasAtuaco, $this->request->data);
            if ($this->AreasAtuacoes->save($areasAtuaco)) {
                $this->Flash->success(__('The areas atuaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areas atuaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areasAtuaco'));
        $this->set('_serialize', ['areasAtuaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Areas Atuaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areasAtuaco = $this->AreasAtuacoes->get($id);
        if ($this->AreasAtuacoes->delete($areasAtuaco)) {
            $this->Flash->success(__('The areas atuaco has been deleted.'));
        } else {
            $this->Flash->error(__('The areas atuaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
