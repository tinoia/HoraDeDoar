<?php
use App\Controller\InstituicoesController;
use App\Controller\DoadoresController;
?>

<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
    <!-- navbar-header -->
    <div class="navbar-header">


    </div>
    <!-- end navbar-header -->
    <!-- navbar-top-links -->
    <ul class="nav navbar-top-links navbar-right">
        <!-- main dropdown -->
        <li >
            <?php 
            $session = $this->request->session();
            $usuarioLogado = $session->read('Auth.User.name');
            $tipoUsuario = $session->read('Auth.User.type');
            $idUsuario = $session->read('Auth.User.iduser');

            if($tipoUsuario=="Doador"){
                $controller = new DoadoresController();
                $idUsuarioAtual =  $controller->getbyIdUser($idUsuario);


            }else{
                $controller = new InstituicoesController();
                $idUsuarioAtual = $controller->getbyIdUser($idUsuario); 
            }

            echo 'Você está logado como: '.$usuarioLogado;
            ?>
        </a>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-3x"></i>
            </a>
            <!-- dropdown user-->
            <ul class="dropdown-menu dropdown-user">
                <?php if($tipoUsuario=="Doador"){?>
                    <li><a href=<?php echo $this->Url->build('/Doadores/view/'.$idUsuarioAtual) ?>><i class="fa fa-user fa-fw"></i>Minha conta</a></li>
                    <li><a href=<?php echo $this->Url->build('/Doadores/edit/'.$idUsuarioAtual) ?>><i class="fa fa-gear fa-fw"></i>Alterar dados</a></li>
                    <li class="divider"></li>
                    <li><a href=<?php echo $this->Url->build('/Doadores/delete/'.$idUsuarioAtual) ?>><i class="fa fa-gear fa-fw"></i>Excluir conta</a></li>
                    <li class="divider"></li>
                    <li><a href=<?php echo $this->Url->build('/Users/logout') ?>><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                    
                <?php }else{?>
                    <li><a href=<?php echo $this->Url->build('/Instituicoes/view/'.$idUsuarioAtual) ?>><i class="fa fa-gear fa-fw"></i>Minha conta</a></li>
                    <li><a href=<?php echo $this->Url->build('/Instituicoes/edit/'.$idUsuarioAtual) ?>><i class="fa fa-gear fa-fw"></i>Alterar dados</a></li>
                    <li class="divider"></li>
                    <li><a href=<?php echo $this->Url->build('/Instituicoes/delete/'.$idUsuarioAtual) ?>><i class="fa fa-gear fa-fw"></i>Excluir conta</a></li>
                    <li class="divider"></li>
                    <li><a href=<?php echo $this->Url->build('/Users/logout') ?>><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                    
                <?php }?> 
            </ul>
            <!-- end dropdown-user -->
        </li>
        <!-- end main dropdown -->
    </ul>

    <!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->