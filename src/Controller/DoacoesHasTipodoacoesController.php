<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DoacoesHasTipodoacoes Controller
 *
 * @property \App\Model\Table\DoacoesHasTipodoacoesTable $DoacoesHasTipodoacoes
 */
class DoacoesHasTipodoacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('doacoesHasTipodoacoes', $this->paginate($this->DoacoesHasTipodoacoes));
        $this->set('_serialize', ['doacoesHasTipodoacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Doacoes Has Tipodoaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doacoesHasTipodoaco = $this->DoacoesHasTipodoacoes->get($id, [
            'contain' => []
        ]);
        $this->set('doacoesHasTipodoaco', $doacoesHasTipodoaco);
        $this->set('_serialize', ['doacoesHasTipodoaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doacoesHasTipodoaco = $this->DoacoesHasTipodoacoes->newEntity();
        if ($this->request->is('post')) {
            $doacoesHasTipodoaco = $this->DoacoesHasTipodoacoes->patchEntity($doacoesHasTipodoaco, $this->request->data);
            if ($this->DoacoesHasTipodoacoes->save($doacoesHasTipodoaco)) {
                $this->Flash->success(__('The doacoes has tipodoaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doacoes has tipodoaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doacoesHasTipodoaco'));
        $this->set('_serialize', ['doacoesHasTipodoaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doacoes Has Tipodoaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doacoesHasTipodoaco = $this->DoacoesHasTipodoacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doacoesHasTipodoaco = $this->DoacoesHasTipodoacoes->patchEntity($doacoesHasTipodoaco, $this->request->data);
            if ($this->DoacoesHasTipodoacoes->save($doacoesHasTipodoaco)) {
                $this->Flash->success(__('The doacoes has tipodoaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doacoes has tipodoaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doacoesHasTipodoaco'));
        $this->set('_serialize', ['doacoesHasTipodoaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doacoes Has Tipodoaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doacoesHasTipodoaco = $this->DoacoesHasTipodoacoes->get($id);
        if ($this->DoacoesHasTipodoacoes->delete($doacoesHasTipodoaco)) {
            $this->Flash->success(__('The doacoes has tipodoaco has been deleted.'));
        } else {
            $this->Flash->error(__('The doacoes has tipodoaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
