<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\InstituicoesController;

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

    public function confirmarPagamento($id = null){
        $conecta = mysql_connect("localhost", "root", "tineloco1") or print (mysql_error()); 
        mysql_select_db("banco_hdd", $conecta);
        $sql = "update doacoes set confirmacao_doacoes=1 where id_doacoes=$id";
        $qr  = mysql_query($sql) or die(mysql_error());
        
        return $this->redirect(['action' => 'index']);

    }

    public function recusarPagamento($id = null){
        $conecta = mysql_connect("localhost", "root", "tineloco1") or print (mysql_error()); 
        mysql_select_db("banco_hdd", $conecta);
        $sql = "update doacoes set confirmacao_doacoes=2 where id_doacoes=$id";
        $qr  = mysql_query($sql) or die(mysql_error());
        
        return $this->redirect(['action' => 'index']);

    }



}
