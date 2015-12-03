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
                <a href="<?php echo $this->Url->build('/Instituicoes') ?>"><i class="fa fa-list fa-fw"></i>Instituições<span class="fa arrow"></span></a>
            </li>
            
            <li>
                <a href="<?php echo $this->Url->build('/Doacoes') ?>"><i class="fa fa-sitemap fa-fw"></i>Minhas Doações<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/Doadores/quero_doar') ?>"><i class="fa fa-sitemap fa-fw"></i>Doar<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/Sobre') ?>"><i class="fa fa-sitemap fa-fw"></i>Sobre<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/Instituicoes/busca_geografica') ?>"><i class="fa fa-sitemap fa-fw"></i>Perto de mim<span class="fa arrow"></span></a>
            </li>
           

            
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->