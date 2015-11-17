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
            $idUsuario = $session->read('Auth.User.iduser');
            echo 'Você está logado como: '.$usuarioLogado;
            ?>
        </a>







        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-3x"></i>
            </a>
            <!-- dropdown user-->
            <ul class="dropdown-menu dropdown-user">
                <li><a href=<?php echo $this->Url->build('/Users/view/'.$idUsuario) ?>><i class="fa fa-user fa-fw"></i>Minha conta</a>
                </li>
                <li><a href=<?php echo $this->Url->build('/Users/edit/'.$idUsuario) ?>><i class="fa fa-gear fa-fw"></i>Alterar dados</a>
                </li>
                <li class="divider"></li>
                <li><a href=<?php echo $this->Url->build('/Users/logout') ?>><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                </li>
            </ul>
            <!-- end dropdown-user -->
        </li>
        <!-- end main dropdown -->
    </ul>

    <!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->
