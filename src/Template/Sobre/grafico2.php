<?php 
	$dataAtual = date("Y-m-d");
	
    $Dinheirod=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '1' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $Dinheirod=mysql_fetch_assoc($Dinheirod);
	$Alimentod=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '2' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $Alimentod=mysql_fetch_assoc($Alimentod);
	$Brinquedod=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '3' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $Brinquedod=mysql_fetch_assoc($Brinquedod);
	$Roupad=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '4' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $Roupad=mysql_fetch_assoc($Roupad);
	$Plimpezad=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '5' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $Plimpezad=mysql_fetch_assoc($Plimpezad);
	$Phigiened=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '6' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $Phigiened=mysql_fetch_assoc($Phigiened);
	$eletrodomesticod=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '7' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $eletrodomesticod=mysql_fetch_assoc($eletrodomesticod);
	$moveisd=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '8' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $moveisd=mysql_fetch_assoc($moveisd);
	$ainfod=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '9' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $ainfod=mysql_fetch_assoc($ainfod);
	$outrod=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '10' 
							AND d.confirmacao_doacoes = '1'
							AND d.data_doacoes = '$dataAtual'");
    $outrod=mysql_fetch_assoc($outrod);
	?>

<div class="box">
    <div class="box-chart">
        <canvas id="GraficoDonut" style="width:100%;"></canvas>
        
        <script type="text/javascript">
            $Dinheirod = parseInt($Dinheirod = "<?php print $Dinheirod['COUNT(n.id_tipos_doacoes)'] ?>");
            $Alimentod = parseInt($Alimentod = "<?php print $Alimentod['COUNT(n.id_tipos_doacoes)'] ?>");
            $Brinquedod = parseInt($Brinquedod = "<?php print $Brinquedod['COUNT(n.id_tipos_doacoes)'] ?>");
			$Roupad = parseInt($Roupad = "<?php print $Roupad['COUNT(n.id_tipos_doacoes)'] ?>");
			$Plimpezad = parseInt($Plimpezad = "<?php print $Plimpezad['COUNT(n.id_tipos_doacoes)'] ?>");
			$Phigiened = parseInt($Phigiened = "<?php print $Phigiened['COUNT(n.id_tipos_doacoes)'] ?>");
			$eletrodomesticod = parseInt($eletrodomesticod = "<?php print $eletrodomesticod['COUNT(n.id_tipos_doacoes)'] ?>");
			$moveisd = parseInt($moveisd = "<?php print $moveisd['COUNT(n.id_tipos_doacoes)'] ?>");
			$ainfod = parseInt($ainfod = "<?php print $ainfod['COUNT(n.id_tipos_doacoes)'] ?>");
			$outrod = parseInt($outrod = "<?php print $outrod['COUNT(n.id_tipos_doacoes)'] ?>");
            
            var options2 = {
                responsive:true
            };
               
            var data2 = [
				{
                    value: $Dinheirod,
                    color: "#46BFBD",
                    highlight: "#FFFFFF",
                    label: "Dinheiro"
                },
                {
                    value: $Alimentod,
                    color:"#F7464A",
                    highlight: "#FFFFFF",
                    label: "Alimentos"
                },
				{
                    value: $Brinquedod,
                    color: "#227788",
                    highlight: "#FFFFFF",
                    label: "Brinquedos"
                },
				{
                    value: $Roupad,
                    color: "#AA12D5",
                    highlight: "#FFFFFF",
                    label: "Roupas"
                },
				{
                    value: $Plimpezad,
                    color: "#555555",
                    highlight: "#FFFFFF",
                    label: "Produtos de limpeza"
                },
				{
                    value: $Phigiened,
                    color: "#777777",
                    highlight: "#FFFFFF",
                    label: "Produtos de higiene"
                },
				{
                    value: $eletrodomesticod,
                    color: "#999999",
                    highlight: "#FFFFFF",
                    label: "Eletrodomésticos"
                },
				{
                    value: $moveisd,
                    color: "#BBBBBB",
                    highlight: "#FFFFFF",
                    label: "Móveis"
                },
				{
                    value: $ainfod,
                    color: "#8542AA",
                    highlight: "#FFFFFF",
                    label: "Artigos de Informática"
                },
				{
                    value: $outrod,
                    color: "#005687",
                    highlight: "#FFFFFF",
                    label: "Outros"
                },
            ]       
        </script>

    </div>
</div>