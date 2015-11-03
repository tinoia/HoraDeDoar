<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreasInteresses Controller
 *
 * @property \App\Model\Table\AreasInteressesTable $AreasInteresses
 */
class AreasInteressesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('areasInteresses', $this->paginate($this->AreasInteresses));
        $this->set('_serialize', ['areasInteresses']);
    }

    /**
     * View method
     *
     * @param string|null $id Areas Interess id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areasInteress = $this->AreasInteresses->get($id, [
            'contain' => []
        ]);
        $this->set('areasInteress', $areasInteress);
        $this->set('_serialize', ['areasInteress']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areasInteress = $this->AreasInteresses->newEntity();
        if ($this->request->is('post')) {
            $areasInteress = $this->AreasInteresses->patchEntity($areasInteress, $this->request->data);
            if ($this->AreasInteresses->save($areasInteress)) {
                $this->Flash->success(__('The areas interess has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areas interess could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areasInteress'));
        $this->set('_serialize', ['areasInteress']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Areas Interess id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areasInteress = $this->AreasInteresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areasInteress = $this->AreasInteresses->patchEntity($areasInteress, $this->request->data);
            if ($this->AreasInteresses->save($areasInteress)) {
                $this->Flash->success(__('The areas interess has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The areas interess could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areasInteress'));
        $this->set('_serialize', ['areasInteress']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Areas Interess id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areasInteress = $this->AreasInteresses->get($id);
        if ($this->AreasInteresses->delete($areasInteress)) {
            $this->Flash->success(__('The areas interess has been deleted.'));
        } else {
            $this->Flash->error(__('The areas interess could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
