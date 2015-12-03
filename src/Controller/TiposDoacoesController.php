<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposDoacoes Controller
 *
 * @property \App\Model\Table\TiposDoacoesTable $TiposDoacoes
 */
class TiposDoacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tiposDoacoes', $this->paginate($this->TiposDoacoes));
        $this->set('_serialize', ['tiposDoacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Doaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposDoaco = $this->TiposDoacoes->get($id, [
            'contain' => []
        ]);
        $this->set('tiposDoaco', $tiposDoaco);
        $this->set('_serialize', ['tiposDoaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposDoaco = $this->TiposDoacoes->newEntity();
        if ($this->request->is('post')) {
            $tiposDoaco = $this->TiposDoacoes->patchEntity($tiposDoaco, $this->request->data);
            if ($this->TiposDoacoes->save($tiposDoaco)) {
                $this->Flash->success(__('The tipos doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposDoaco'));
        $this->set('_serialize', ['tiposDoaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Doaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposDoaco = $this->TiposDoacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposDoaco = $this->TiposDoacoes->patchEntity($tiposDoaco, $this->request->data);
            if ($this->TiposDoacoes->save($tiposDoaco)) {
                $this->Flash->success(__('The tipos doaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos doaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposDoaco'));
        $this->set('_serialize', ['tiposDoaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Doaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposDoaco = $this->TiposDoacoes->get($id);
        if ($this->TiposDoacoes->delete($tiposDoaco)) {
            $this->Flash->success(__('The tipos doaco has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos doaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function get($id){
        $query = $this->TiposDoacoes->find('all', [
            'conditions' => ['id_tipos_doacoes' => $id]
        ]);
        return $query->first()->tipos_doacoes;

    }

    public function getTipos(){
        $this->set('tipos', $this->paginate($this->TiposDoacoes));
        $this->set('_serialize', ['tipos']);
    }
}
