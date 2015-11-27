<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <?php echo $this->element('head'); ?> 
    <head>
        <!-- page wrapper -->
        <?php        
        echo $this->element('navbartop'); 
        ?>
        

    </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
                <?php 
                 $session = $this->request->session();
                $tipoUsuario = $session->read('Auth.User.type');
                if($tipoUsuario=="Doador"){
                    echo $this->element('navbarsideDoador'); 
                } else{
                echo $this->element('navbarsideInstituicao');
            }?>
        </div>
        <!-- end wrapper -->

        <div id="page-wrapper">
        <section class="container clearfix">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </section>

        <?php echo $this->element('footer'); ?> 
    </div>
    </body>
</html>
