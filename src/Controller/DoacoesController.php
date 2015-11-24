<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doacoes Controller
 *
 * @property \App\Model\Table\DoacoesTable $Doacoes
 */
class DoacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('doacoes', $this->paginate($this->Doacoes));
        $this->set('_serialize', ['doacoes']);
    }

    public function dashboard()
    {

    }

    /**
     * View method
     *
     * @param string|null $id Doaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doaco = $this->Doacoes->get($id, [
            'contain' => []
            ]);
        $this->set('doaco', $doaco);
        $this->set('_serialize', ['doaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function addDinheiro()
    {
        $doaco = $this->Doacoes->newEntity();
        if ($this->request->is('post')) {
            $doaco = $this->Doacoes->patchEntity($doaco, $this->request->data);
            debug($doaco);
            if ($this->Doacoes->save($doaco)) {
                $this->Flash->success(__('The doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doaco'));
        $this->set('_serialize', ['doaco']);
    }

    

    /**
     * Edit method
     *
     * @param string|null $id Doaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doaco = $this->Doacoes->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doaco = $this->Doacoes->patchEntity($doaco, $this->request->data);
            if ($this->Doacoes->save($doaco)) {
                $this->Flash->success(__('The doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doaco'));
        $this->set('_serialize', ['doaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doaco = $this->Doacoes->get($id);
        if ($this->Doacoes->delete($doaco)) {
            $this->Flash->success(__('The doaco has been deleted.'));
        } else {
            $this->Flash->error(__('The doaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
