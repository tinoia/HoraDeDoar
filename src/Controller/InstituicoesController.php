<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\UsersController;
use App\Model\Entity\User;
use App\Controller\EnderecosController;
use App\Model\Entity\Endereco;
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
        $instituico = $this->Instituicoes->newEntity();
        $UsersController = new UsersController();
        $user = new User();
        $EnderecosController = new EnderecosController();
        $endereco = new Endereco();
        

        if ($this->request->is('post')) {
            $instituico = $this->Instituicoes->patchEntity($instituico, $this->request->data);

            $user->name = $instituico->nome_instituicoes;
            $user->email = $instituico->email_instituicoes;
            $user->password = $instituico->senha_instituicoes;
            $user->type = "Instituição";

            $endereco->cep_enderecos = $instituico->cep_instituicoes;
            $endereco->estado_enderecos = $instituico->estado_instituicoes;
            $endereco->cidade_enderecos = $instituico->cidade_instituicoes;
            $endereco->bairro_enderecos = $instituico->bairro_instituicoes;
            $endereco->rua_enderecos = $instituico->rua_instituicoes;
            $endereco->numero_enderecos = $instituico->numero_instituicoes;
            $endereco->complemento_enderecos = $instituico->complemento_instituicoes;


            if($UsersController->addModified($user)){
                $idUser = $UsersController->getID($user->email);
                $instituico->users_iduser = $idUser;
                
                if($EnderecosController->addModified($endereco)){
                    $idEndereco = $EnderecosController->getID($endereco->cep_enderecos);
                    $instituico->id_enderecos = $idEndereco;

                    if ($this->Instituicoes->save($instituico)) {
                        $this->Flash->success(__('Cadastro efetuado com sucesso.'));
                        return $this->redirect(['controller' => 'Users','action' => 'login']);
                    } else {
                        $this->Flash->error(__('The instituico could not be saved. Please, try again.'));
                    }
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

    public function getbyIdUser($idUser) {
        $query = $this->Instituicoes->find('all', [
            'conditions' => ['users_iduser' => $idUser]
        ]);
        return $query->first()->id_instituicoes;
    }

    public function getNomeByID($id) {
        $query = $this->Instituicoes->find('all', [
            'conditions' => ['id_instituicoes' => $id]
        ]);
        return $query->first()->nome_instituicoes;
    }



    public function dashboard()
    {

    //conect banco
        $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
        mysql_select_db("novo", $conecta);


        $doadores=mysql_query("SELECT COUNT(id_doadores) FROM doadores");
        $doadores=mysql_fetch_assoc($doadores);

        $instituicao=mysql_query("SELECT COUNT(id_instituicoes) FROM instituicoes");
        $instituicao=mysql_fetch_assoc($instituicao);

        $valor=mysql_query("SELECT SUM(valor_doacoes)FROM doacoes WHERE confirmacao_doacoes = '1'");
        $valor=mysql_fetch_assoc($valor);

        $maior=mysql_query("SELECT MAX(valor_doacoes) FROM doacoes;");
        $maior=mysql_fetch_assoc($maior);

        $mim=mysql_query("SELECT MIN(valor_doacoes) FROM doacoes");
        $mim=mysql_fetch_assoc($mim);

    // for date
        $dataAtual = date("Y-m-d");

        $valordia=mysql_query("SELECT SUM(valor_doacoes)FROM doacoes WHERE confirmacao_doacoes = '1' AND data_doacoes = '$dataAtual'");
        $valordia=mysql_fetch_assoc($valordia);

        $maiordia=mysql_query("SELECT MAX(valor_doacoes) FROM doacoes where data_doacoes = '$dataAtual'");
        $maiordia=mysql_fetch_assoc($maiordia);

        $mimdia=mysql_query("SELECT MIN(valor_doacoes) FROM doacoes where data_doacoes = '$dataAtual'");
        $mimdia=mysql_fetch_assoc($mimdia);

    }

}
