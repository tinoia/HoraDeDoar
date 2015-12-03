<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\DoacoesHasTipodoaco;
use Cake\Mailer\Email;

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

        $session = $this->request->session();
        $tipoUsuario = $session->read('Auth.User.type');
        $idUsuario = $session->read('Auth.User.iduser');
        
        if($tipoUsuario=="Doador"){
            $DoadoresController = new DoadoresController();
            $idUsuarioAtual = $DoadoresController->getbyIdUser($idUsuario);
            $query = $this->Doacoes->find('all')->where(['id_doadores' => $idUsuarioAtual]);
        } else{
            $InstituicoesController = new InstituicoesController();
            $idUsuarioAtual = $InstituicoesController->getbyIdUser($idUsuario);
            $query = $this->Doacoes->find('all')->where(['id_instituicoes' => $idUsuarioAtual]);
        }
        $this->set('doacoes', $this->paginate($query));
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
            $doaco->data_doacoes = date('Y-m-d');
            $doaco->tipo_doacoes = 1;
            if ($this->Doacoes->save($doaco)) {
                $controller = new DoacoesHasTipodoacoesController();
                $novo = new DoacoesHasTipodoaco();
                $novo->id_tipos_doacoes = 1;
                $novo->id_doacoes = $doaco->id_doacoes;
                $controller->add($novo);

                $this->Flash->success(__('Doação efetuada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erro na doação.'));
            }
        }
        $this->set(compact('doaco'));
        $this->set('_serialize', ['doaco']);
    }

    public function addObjetos(){
        $doaco = $this->Doacoes->newEntity();
        if ($this->request->is('post')) {
            $doaco = $this->Doacoes->patchEntity($doaco, $this->request->data);
            $doaco->data_doacoes = date('Y-m-d');
            
            if ($this->Doacoes->save($doaco)) {
                $controller = new DoacoesHasTipodoacoesController();
                $novo = new DoacoesHasTipodoaco();
                $novo->id_tipos_doacoes = $doaco->tipo_doacoes;
                $novo->id_doacoes = $doaco->id_doacoes;
                $controller->add($novo);

                $this->Flash->success(__('Doação efetuada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erro na doação.'));
            }
        } else{
            $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
            mysql_select_db("novo", $conecta);
            $idInstituicao = $_GET['id'];
            $sql = "SELECT id_tipos_doacoes FROM instituicoes_has_tipos_doacoes WHERE id_instituicoes=$idInstituicao AND checked=1";
            $qr  = mysql_query($sql) or die(mysql_error());
            while($ln = mysql_fetch_array($qr)){
                $sql2 = "SELECT tipos_doacoes FROM tipos_doacoes WHERE id_tipos_doacoes=$ln[0]";
                $qr2  = mysql_query($sql2) or die(mysql_error());
                $teste = mysql_fetch_array($qr2);
                $opcoes[$ln[0]]=$teste[0];
            }

            $this->set('opcoes',$opcoes);
            $this->set('_serialize', ['opcoes']);


        }
        $this->set(compact('doaco'));
        $this->set('_serialize', ['doaco']);

    }

    public function traduz($id){
        switch ($id) {
            case 1:
            echo "Dinheiro";
            break;
            case 2:
            echo "Alimento";
            break;
            case 3:
            echo "Brinquedo";
            break;
            case 4:
            echo "Roupa";
            break;
            case 5:
            echo "Produto de limpeza";
            break;
            case 6:
            echo "Produto de higiene";
            break;
            case 7:
            echo "Elétrodoméstico";
            break;
            case 8;
            echo "Móvel";
            break;
            case 9:
            echo "Artigos de informática";
            break;
        }
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

    public function confirmarPagamento($id = null){
        $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
        mysql_select_db("novo", $conecta);
        $sql = "update doacoes set confirmacao_doacoes=1 where id_doacoes=$id";
        $qr  = mysql_query($sql) or die(mysql_error());
        
        return $this->redirect(['action' => 'index']);

    }

    public function recusarPagamento($id = null){
        $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
        mysql_select_db("novo", $conecta);
        $sql = "update doacoes set confirmacao_doacoes=2 where id_doacoes=$id";
        $qr  = mysql_query($sql) or die(mysql_error());
        
        return $this->redirect(['action' => 'index']);

    }

    


}
