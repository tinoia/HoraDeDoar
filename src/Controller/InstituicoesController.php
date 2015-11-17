<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\UsersController;
use App\Model\Entity\User;
use Cake\DataSource\ConnectionManager;

/**
 * Instituicoes Controller
 *
 * @property \App\Model\Table\InstituicoesTable $Instituicoes
 */
class InstituicoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('instituicoes', $this->paginate($this->Instituicoes));
        $this->set('_serialize', ['instituicoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Instituico id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instituico = $this->Instituicoes->get($id, [
            'contain' => []
            ]);
        $this->set('instituico', $instituico);
        $this->set('_serialize', ['instituico']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $connection = ConnectionManager::get('default');
        $instituico = $this->Instituicoes->newEntity();
        $UsersController = new UsersController();
        $user = new User();
        if ($this->request->is('post')) {
            $instituico = $this->Instituicoes->patchEntity($instituico, $this->request->data);

            $user->name = $instituico->nome_instituicoes;
            $user->email = $instituico->email_instituicoes;
            $user->password = $instituico->senha_instituicoes;
            $user->type = "Instituição";
            
            if($UsersController->addModified($user)){
                $query = $UsersController->getID($user->email);
                $instituico->users_iduser = $query;
                
                if ($this->Instituicoes->save($instituico)) {
                    $this->Flash->success(__('The instituico has been saved.'));
                    return $this->redirect(['controller' => 'Users','action' => 'login']);
                } else {
                    $this->Flash->error(__('The instituico could not be saved. Please, try again.'));
                }
            }
        }
        $this->set(compact('instituico'));
        $this->set('_serialize', ['instituico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instituico id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instituico = $this->Instituicoes->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instituico = $this->Instituicoes->patchEntity($instituico, $this->request->data);
            if ($this->Instituicoes->save($instituico)) {
                $this->Flash->success(__('The instituico has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The instituico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('instituico'));
        $this->set('_serialize', ['instituico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instituico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instituico = $this->Instituicoes->get($id);
        if ($this->Instituicoes->delete($instituico)) {
            $this->Flash->success(__('The instituico has been deleted.'));
        } else {
            $this->Flash->error(__('The instituico could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
