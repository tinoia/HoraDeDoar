
<div class="row">
  <!-- Page Header -->
  <div class="col-lg-12">
    <h1 class="page-header">Instituições Cadastradas</h1>
  </div>
  <!--End Page Header -->
</div>


<body>
  <script language="JavaScript">
  function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if(display == "none")
      document.getElementById(el).style.display = 'block';
    else
      document.getElementById(el).style.display = 'none';
  }
  </script>

  <?php
    // conecta banco
  $conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
  mysql_select_db("novo", $conecta);
  
    //A quantidade de valor a ser exibida
  $quantidade = 4;
    //a pagina atual
  $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
    //Calcula a pagina de qual valor será exibido
  $inicio     = ($quantidade * $pagina) - $quantidade;

    //Monta o SQL com LIMIT para exibição dos dados  
  $sql = "SELECT id_instituicoes, email_instituicoes, nome_instituicoes, descricao_instituicoes,telefone_instituicoes, ano_fundacao_instituicoes, numero_funcionario_instituicoes, numero_voluntario_instituicoes, projeto_instituicoes, mapa_enderecos FROM enderecos e INNER JOIN instituicoes i ON e.id_enderecos = i.id_enderecos ORDER BY nome_instituicoes DESC LIMIT $inicio, $quantidade";
    //Executa o SQL
  $qr  = mysql_query($sql) or die(mysql_error());
  
  ?>
  <form method="GET" action="Instituicoes/busca">
  <label for="consulta">Buscar:</label>
  <input type="text" id="consulta" name="consulta" maxlength="255" />

  <input type="submit" value="OK" />

  </form>
  <br><br>
  <?php

    //Percorre os campos da tabela
  while($ln = mysql_fetch_assoc($qr)){?>
  <div class="row col-lg-12">
    <div class="col-lg-6">
      <!--Pill Tabs   -->
      <div class="panel panel-default">
        <div class="panel-heading">
            <center><h1>
              <?php echo $ln['nome_instituicoes'];?>
            </h1></center>
        </div>
        <div class="panel-body">
          <ul class="nav nav-pills">
            <li class="active"><a href=<?php echo "#principal".$ln['id_instituicoes'];?> data-toggle="tab">Principal</a>
            </li>
            <li><a href=<?php echo "#endereco".$ln['id_instituicoes'];?> data-toggle="tab">Endereço</a>
            </li>
            <li><a href=<?php echo "#doacoes".$ln['id_instituicoes'];?> data-toggle="tab">Como ajudar</a>
            </li>
            <li><a href=<?php echo "#contato".$ln['id_instituicoes'];?> data-toggle="tab">Contato</a>
            </li>
          </ul>

          <div class="tab-content">
            <?php
            $aux = "principal".$ln['id_instituicoes'];
            ?>

            <div class="tab-pane fade in active" id=<?php print_r($aux)?>>
              <h4>Informações importantes:</h4>
              <p>
                Quem somos:
                <?php echo $ln['nome_instituicoes'];?><br>
                
                O que fazemos: 
                <?php echo $ln['descricao_instituicoes']?><br>

                Ano de Fundação:
                <?php echo $ln['ano_fundacao_instituicoes']?><br>

                Número de Funcionários:
                <?php echo $ln['numero_funcionario_instituicoes']?><br>

                Número de Voluntarios:
                <?php echo $ln['numero_voluntario_instituicoes']?><br>

              </p>
            </div>
            <?php
            $aux = "doacoes".$ln['id_instituicoes'];
            ?>
            <div class="tab-pane fade" id=<?php print_r($aux)?>>
              <h4>No momento estamos precisando de:</h4>
              <p> 
               <?php
               $id = $ln['id_instituicoes'];
               $doacao = "SELECT tipos_doacoes FROM tipos_doacoes t INNER JOIN instituicoes_has_tipos_doacoes n ON t.id_tipos_doacoes = n.id_tipos_doacoes INNER JOIN instituicoes i ON n.id_instituicoes = i.id_instituicoes WHERE i.id_instituicoes=$id and checked=1;";
               $re = mysql_query($doacao) or die(mysql_error());
               while($ri = mysql_fetch_assoc($re)){
               echo $ri['tipos_doacoes'];
               echo ", ";
               }?><br>
               <div>
               
               <a href=<?php echo "/HoraDeDoar/doacoes/addDinheiro?id=".$id?> class="btn btn-info" role="button">Doar Dinheiro</a>                         
               <a href=<?php echo "/HoraDeDoar/doacoes/addObjetos?id=".$id?> class="btn btn-info" role="button">Doar Objetos</a>
               </div>
           </p>
         </div>
         <?php
         $aux = "endereco".$ln['id_instituicoes'];
         ?>
         <div class="tab-pane fade" id=<?php print_r($aux)?>>
          <h4>Como chegar:</h4>
          <p>
            link do google maps
          </p>
        </div>
        <?php
        $aux = "contato".$ln['id_instituicoes'];
        ?>
        <div class="tab-pane fade" id=<?php print_r($aux)?>>
          <h4>Contato</h4>
          <p> 
            Email: 
            <?php echo $ln['email_instituicoes']?><br>
            Telefone:
            <?php echo $ln['telefone_instituicoes']?> 
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


<?php }?>


<?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT id_instituicoes FROM instituicoes";
  //Executa o SQL
  $qrTotal    = mysql_query($sqlTotal) or die(mysql_error());
  //Total de Registro na tabela
  $numTotal   = mysql_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 3;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
  ?>
  
  <div class="col-lg-12">
    <div id="navegacao" class="page-footer">
      <h1>
        <?php
        echo '<a href="?pagina=1">primeira</a> | ';
        echo "<a href=\"?pagina=$anterior\">anterior</a> | ";
        ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
         for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
           if($i > 0)
            echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
        }

        echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

        for($i = $pagina+1; $i < $pagina+$exibir; $i++){
         if($i <= $totalPagina)
          echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
      }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

   ?>
   <?php echo " | <a href=\"?pagina=$posterior\">próxima</a> | ";
   echo "  <a href=\"?pagina=$totalPagina\">última</a>";
   ?>
   <h1>
   </div>
 </div>

</body>


</div>
</div>


