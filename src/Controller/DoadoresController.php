<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\UsersController;
use App\Model\Entity\User;
use App\Controller\EnderecosController;
use App\Model\Entity\Endereco;
use Cake\DataSource\ConnectionManager;

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

    public function queroDoar(){

        //pega dados da view e monta condições para consulta
        if ($this->request->is('post')){
            $condicoes = "n.checked=1 and (";
            $alternativas = $this->request->data();
            for($i = 1 ; $i<10 ; $i++){
                if($alternativas[$i]==1)
                    $condicoes = $condicoes."n.id_tipos_doacoes=".$i." or "; 

            }   
            $condicoes = substr_replace($condicoes, ')', -4, -1);
            $session = $this->request->session();
            $session->write('condicoes',$condicoes);
            return $this->redirect(['controller' => 'Instituicoes','action' => 'quero_doar']);
        }
    }

    public function geraCondicao($i){
        switch ($i) {
        
        case 1:
            return "n.id_tipos_doacoes=1 or ";
            break;
        case 2:
            return "n.id_tipos_doacoes=2 or ";
            break;
        case 3:
            return "n.id_tipos_doacoes=3 or ";
            break;
            case 4:
            return "n.id_tipos_doacoes=4 or ";
            break;
            case 5:
            return "n.id_tipos_doacoes=5 or ";
            break;
            case 6:
            return "n.id_tipos_doacoes=6 or ";
            break;
            case 7;
            return "n.id_tipos_doacoes=7 or ";
            break;
            case 8:
            return "n.id_tipos_doacoes=8 or ";
            break;
            case 9:
            return "n.id_tipos_doacoes=9 or ";
            break;
        }

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
        $UsersController = new UsersController();
        $user = new User();
        $EnderecosController = new EnderecosController();
        $endereco = new Endereco();

        if ($this->request->is('post')) {
            $doadore = $this->Doadores->patchEntity($doadore, $this->request->data);
            
            $user->name = $doadore->nome_doadores;
            $user->email = $doadore->email_doadores;
            $user->password = $doadore->senha_doadores;
            $user->type = "Doador";

            $endereco->cep_enderecos = $doadore->cep_doadores;
            $endereco->estado_enderecos = $doadore->estado_doadores;
            $endereco->cidade_enderecos = $doadore->cidade_doadores;
            $endereco->bairro_enderecos = $doadore->bairro_doadores;
            $endereco->rua_enderecos = $doadore->rua_doadores;
            $endereco->numero_enderecos = $doadore->numero_doadores;
            $endereco->complemento_enderecos = $doadore->complemento_doadores;


            if($UsersController->addModified($user)){
                $idUser = $UsersController->getID($user->email);
                $doadore->users_iduser = $idUser;

                if($EnderecosController->addModified($endereco)){
                    $idEndereco = $EnderecosController->getID($endereco->cep_enderecos);
                    $doadore->id_enderecos = $idEndereco;

                    if ($this->Doadores->save($doadore)) {
                        $this->Flash->success(__('Cadastro efetuado com sucesso.'));
                        return $this->redirect(['controller' => 'Users','action' => 'login']);
                    } else {
                        $this->Flash->error(__('The doadore could not be saved. Please, try again.'));
                    }
                }
            }
        }
        $this->set(compact('doadore'));
        $this->set('_serialize', ['doadore']);
    }

    /*public function add()
    {
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
    }*/

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
                $this->Flash->success(__('Dados atualizados com sucesso.'));
                
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

    public function getbyIdUser($idUser) {
        $query = $this->Doadores->find('all', [
            'conditions' => ['users_iduser' => $idUser]
        ]);
        return $query->first()->id_doadores;
    }

    public function getDoadorbyIdUser($idUser) {
        $query = $this->Doadores->find('all', [
            'conditions' => ['users_iduser' => $idUser]
        ]);
        return $query->first();
    }
}
