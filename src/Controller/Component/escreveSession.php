<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\InstituicoesCotroller;
use App\Controller\DoadoresController;

$DoadoresController = new DoadoresController();
$InstituicoesCotroller = new InstituicoesCotroller();

$session = $this->request->session();
$tipoUsuario = $session->read('Auth.User.type');
$idUsuario = $session->read('Auth.User.iduser');

if($tipoUsuario=="Doador"){
	$idUsuarioAtual = $DoadoresController->getbyIdUser($idUsuario);
    
} else{
    $idUsuarioAtual = $InstituicoesCotroller->getbyIdUser($idUsuario);
   
}

$session->write('idUsuarioAtual',$idUsuarioAtual);