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
                <a href="<?php echo $this->Url->build('/') ?>"><i class="fa fa-home fa-fw"></i>Home</a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/doadores/add') ?>"><i class="fa fa-list fa-fw"></i> Cadastro<span class="fa arrow"></span></a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/instituicoes') ?>"><i class="fa fa-sitemap fa-fw"></i> Instituições<span class="fa arrow"></span></a>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->