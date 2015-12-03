<html lang="pt-BR">
	<head>
		<script src="chart.min.js"></script>
	</head>
	
	<body>    
	<?php
		include ("consultas.php");
	?>

		<table>
			<tr>
				<td><b>Dados Totais</b></td>
				<td></td>				
			</tr>
			<tr>
				<td>Total de Doadores:</td>
				<td><?php echo $doadores["COUNT(id_doadores)"]; ?></td>

			</tr>
			<tr>
				<td>Total de Instituições:</td>
				<td><?php echo $instituicao["COUNT(id_instituicoes)"]; ?></td>
			</tr>
			<tr>
				<td>Total arrecadado:</td>
				<td>R$ <?php echo $valor["SUM(valor_doacoes)"]; ?></td>
			</tr>
			<tr>
				<td>Maior doação:</td>
				<td>R$ <?php echo $maior["MAX(valor_doacoes)"]; ?></td>
			</tr>
			<tr>
				<td>Menor Doação:</td>
				<td>R$ <?php echo $mim["MIN(valor_doacoes)"]; ?></td>
			</tr>
			<tr>
				<td><b>Dados para o dia:</b></td>
				<td><b><?php echo date("d/m/Y", strtotime("now")); ?></b></td>
			</tr>
			<tr>
				<td>Valor arrecadado:</td>
				<td>R$ <?php echo $valordia["SUM(valor_doacoes)"]; ?></td>
			</tr>
			<tr>
				<td>Maior doação:</td>
				<td>R$ <?php echo $maiordia["MAX(valor_doacoes)"]; ?></td>
			</tr>
			<tr>
				<td>Menor Doação:</td>
				<td>R$ <?php echo $mimdia["MIN(valor_doacoes)"]; ?></td>
			</tr>
		</table>	
		<hr>
		<table>
			<tr>
				<td>Dados totais de doação:</td>
				<td></<td>
			</tr>
			<tr>
			<td><?php include ("grafico1.php");?></td>
			<td><?php echo ' dinheiro '. $Dinheiro['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Alimento ' . $Alimento['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Brinquedo ' . $Brinquedo['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Roupa ' . $Roupa['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Produtos de limpeza ' . $Plimpeza['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Produtos de higiene ' . $Phigiene['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Eletrodoméstico ' . $eletrodomestico['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Móveis ' . $moveis['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Artigos de Informática ' . $ainfo['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Outros ' . $outro['COUNT(n.id_tipos_doacoes)'];?></td>
			</tr>
			<tr>
				<td>Dados totais de doação diarias:</td>
				<td></<td>
				<tr>
				<td><?php include ("grafico2.php");?></td>
				<td><?php echo ' dinheiro '. $Dinheirod['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Alimento ' . $Alimento['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Brinquedo ' . $Brinquedod['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Roupa ' . $Roupad['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Produtos de limpeza ' . $Plimpezad['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Produtos de higiene ' . $Phigiened['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Eletrodoméstico ' . $eletrodomesticod['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Móveis ' . $moveisd['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Artigos de Informática ' . $ainfod['COUNT(n.id_tipos_doacoes)'];
						echo ' <br>Outros ' . $outrod['COUNT(n.id_tipos_doacoes)'];?></td>
				</tr>
			</tr>
		</table>
		
		<?php include ('grafico2.php');?>
	</body>  
	<!-- chamada dos graficos -->
    <script>
		if (typeof window.onload != 'function'){
			window.onload = function(){
				var ctx1 = document.getElementById("GraficoPizza").getContext("2d");
				var PizzaChart = new Chart(ctx1).Pie(data1, options1);
				
				/*var ctx2 = document.getElementById("GraficoPolar").getContext("2d");
				var PolarChart = new Chart(ctx2).PolarArea(data2, options2);*/
				
				var ctx2 = document.getElementById("GraficoDonut").getContext("2d");
				var PizzaChart2 = new Chart(ctx2).Doughnut(data2, options2);
				
				/*var ctx4 = document.getElementById("GraficoBarra").getContext("2d");
				var BarChart = new Chart(ctx4).Bar(data4, options4);*/
			}
		}
    </script>  
</html>