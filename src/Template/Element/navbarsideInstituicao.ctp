<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    
                    
                </div>
                <!--end user image section-->
            </li>
            
            <li>
                <a href="<?php echo $this->Url->build('/Instituicoes/dashboard') ?>"><i class="fa fa-list fa-fw"></i>Minha Instituição<span class="fa arrow"></span></a>
            </li>
            
            
            <li>
                <a href="<?php echo $this->Url->build('/Doacoes') ?>"><i class="fa fa-sitemap fa-fw"></i>Doações Recebidas<span class="fa arrow"></span></a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/Instituicoes/desejo_receber') ?>"><i class="fa fa-sitemap fa-fw"></i>O que estou precisando<span class="fa arrow"></span></a>
            </li>

            </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->