<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doadores Controller
 *
 * @property \App\Model\Table\DoadoresTable $Doadores
 * @property \App\Model\Table\EnderecosTable $Enderecos
 */
class DoadoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */

    public function index()
    {
        $this->set('doadores', $this->paginate($this->Doadores));
        $this->set('_serialize', ['doadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Doadore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doadore = $this->Doadores->get($id, [
            'contain' => []
        ]);
        $this->set('doadore', $doadore);
        $this->set('_serialize', ['doadore']);
    }

    public function login(){


    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doadore = $this->Doadores->newEntity();
        if ($this->request->is('post')) {
            $doadore = $this->Doadores->patchEntity($doadore, $this->request->data);
            if ($this->Doadores->save($doadore)) {
                $this->Flash->success(__('The doadore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doadore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doadore'));
        $this->set('_serialize', ['doadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doadore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doadore = $this->Doadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doadore = $this->Doadores->patchEntity($doadore, $this->request->data);
            if ($this->Doadores->save($doadore)) {
                $this->Flash->success(__('The doadore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doadore could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('doadore'));
        $this->set('_serialize', ['doadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doadore = $this->Doadores->get($id);
        if ($this->Doadores->delete($doadore)) {
            $this->Flash->success(__('The doadore has been deleted.'));
        } else {
            $this->Flash->error(__('The doadore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
