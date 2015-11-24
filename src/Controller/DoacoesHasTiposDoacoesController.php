<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DoacoesHasTiposDoacoes Controller
 *
 * @property \App\Model\Table\DoacoesHasTiposDoacoesTable $DoacoesHasTiposDoacoes
 */
class DoacoesHasTiposDoacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('doacoesHasTiposDoacoes', $this->paginate($this->DoacoesHasTiposDoacoes));
        $this->set('_serialize', ['doacoesHasTiposDoacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Doacoes Has Tipos Doaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doacoesHasTiposDoaco = $this->DoacoesHasTiposDoacoes->get($id, [
            'contain' => []
        ]);
        $this->set('doacoesHasTiposDoaco', $doacoesHasTiposDoaco);
        $this->set('_serialize', ['doacoesHasTiposDoaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doacoesHasTiposDoaco = $this->DoacoesHasTiposDoacoes->newEntity();
        if ($this->request->is('post')) {
            $doacoesHasTiposDoaco = $this->DoacoesHasTiposDoacoes->patchEntity($doacoesHasTiposDoaco, $this->request->data);
            if ($this->DoacoesHasTiposDoacoes->save($doacoesHasTiposDoaco)) {
                $this->Flash->success(__('The doacoes has tipos doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doacoes has tipos doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doacoesHasTiposDoaco'));
        $this->set('_serialize', ['doacoesHasTiposDoaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doacoes Has Tipos Doaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doacoesHasTiposDoaco = $this->DoacoesHasTiposDoacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doacoesHasTiposDoaco = $this->DoacoesHasTiposDoacoes->patchEntity($doacoesHasTiposDoaco, $this->request->data);
            if ($this->DoacoesHasTiposDoacoes->save($doacoesHasTiposDoaco)) {
                $this->Flash->success(__('The doacoes has tipos doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doacoes has tipos doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doacoesHasTiposDoaco'));
        $this->set('_serialize', ['doacoesHasTiposDoaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doacoes Has Tipos Doaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doacoesHasTiposDoaco = $this->DoacoesHasTiposDoacoes->get($id);
        if ($this->DoacoesHasTiposDoacoes->delete($doacoesHasTiposDoaco)) {
            $this->Flash->success(__('The doacoes has tipos doaco has been deleted.'));
        } else {
            $this->Flash->error(__('The doacoes has tipos doaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
