<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enderecos Controller
 *
 * @property \App\Model\Table\EnderecosTable $Enderecos
 */
class EnderecosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('enderecos', $this->paginate($this->Enderecos));
        $this->set('_serialize', ['enderecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Endereco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => []
        ]);
        $this->set('endereco', $endereco);
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $endereco = $this->Enderecos->newEntity();
        if ($this->request->is('post')) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('endereco'));
        $this->set('_serialize', ['endereco']);
    }

    public function addModified($novo)
    {
        $endereco = $novo;
        if ($this->Enderecos->save($endereco)) {
                return true;
            }
            $this->Flash->error(__('Unable to add the endereco.'));
        $this->set('endereco', $endereco);
    }


    public function getID($cep) {
        $query = $this->Enderecos->find('all', [
            'conditions' => ['cep_enderecos' => $cep]
        ]);
        return $query->first()->id_enderecos;
    }

    /**
     * Edit method
     *
     * @param string|null $id Endereco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $endereco = $this->Enderecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $endereco = $this->Enderecos->patchEntity($endereco, $this->request->data);
            if ($this->Enderecos->save($endereco)) {
                $this->Flash->success(__('The endereco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The endereco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('endereco'));
        $this->set('_serialize', ['endereco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Endereco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $endereco = $this->Enderecos->get($id);
        if ($this->Enderecos->delete($endereco)) {
            $this->Flash->success(__('The endereco has been deleted.'));
        } else {
            $this->Flash->error(__('The endereco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
