<?php
// Conecte-se ao MySQL 
$conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
mysql_select_db("novo", $conecta);

// Monta a consulta MySQL para saber quantos registros serão encontrados

$bairro = $endereco->bairro_enderecos;
$cidade = $endereco->cidade_enderecos;

$sql = "SELECT e.bairro_enderecos, e.cidade_enderecos, id_instituicoes, nome_instituicoes, descricao_instituicoes,telefone_instituicoes, ano_fundacao_instituicoes,email_instituicoes, numero_funcionario_instituicoes, numero_voluntario_instituicoes, projeto_instituicoes, mapa_enderecos 
FROM enderecos e INNER JOIN instituicoes i 
ON e.id_enderecos = i.id_enderecos 
WHERE (e.bairro_enderecos = '$bairro' AND e.cidade_enderecos = '$cidade') OR (e.cidade_enderecos = '$cidade')
GROUP BY i.nome_instituicoes
ORDER BY e.bairro_enderecos = '$bairro' DESC";

// Executa a consulta
$query = mysql_query($sql);
// ============================================
// Começa a exibição dos resultados
?>
<div class="row">
	<!-- Page Header -->
	<div class="col-lg-12">
		<h1 class="page-header">Instituições perto de você</h1>
	</div>
	<?php
	while($ln = mysql_fetch_assoc($query)){?>
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
								$doacao = "SELECT tipos_doacoes FROM tipos_doacoes t INNER JOIN instituicoes_has_tipos_doacoes n ON t.id_tipos_doacoes = n.id_tipos_doacoes INNER JOIN instituicoes i ON n.id_instituicoes = i.id_instituicoes WHERE i.id_instituicoes=$id and checked=1";
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


<?php }
