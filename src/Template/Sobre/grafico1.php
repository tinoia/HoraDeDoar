<?php 
    $Dinheiro=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '1' 
							AND d.confirmacao_doacoes = '1'");
    $Dinheiro=mysql_fetch_assoc($Dinheiro);
	$Alimento=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '2' 
							AND d.confirmacao_doacoes = '1'");
    $Alimento=mysql_fetch_assoc($Alimento);
	$Brinquedo=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '3' 
							AND d.confirmacao_doacoes = '1'");
    $Brinquedo=mysql_fetch_assoc($Brinquedo);
	$Roupa=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '4' 
							AND d.confirmacao_doacoes = '1'");
    $Roupa=mysql_fetch_assoc($Roupa);
	$Plimpeza=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '5' 
							AND d.confirmacao_doacoes = '1'");
    $Plimpeza=mysql_fetch_assoc($Plimpeza);
	$Phigiene=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '6' 
							AND d.confirmacao_doacoes = '1'");
    $Phigiene=mysql_fetch_assoc($Phigiene);
	$eletrodomestico=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '7' 
							AND d.confirmacao_doacoes = '1'");
    $eletrodomestico=mysql_fetch_assoc($eletrodomestico);
	$moveis=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '8' 
							AND d.confirmacao_doacoes = '1'");
    $moveis=mysql_fetch_assoc($moveis);
	$ainfo=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '9' 
							AND d.confirmacao_doacoes = '1'");
    $ainfo=mysql_fetch_assoc($ainfo);
	$outro=mysql_query("SELECT COUNT(n.id_tipos_doacoes)
							FROM  doacoes d INNER JOIN doacoes_has_tipodoacoes n
							ON d.id_doacoes = n.id_doacoes
							INNER JOIN tipos_doacoes t
							ON n.id_tipos_doacoes = t.id_tipos_doacoes
							WHERE n.id_tipos_doacoes = '10' 
							AND d.confirmacao_doacoes = '1'");
    $outro=mysql_fetch_assoc($outro);
?>

<div class="box">
    <div class="box-chart">
        <canvas id="GraficoPizza" style="width:100%;"></canvas>
     
		<script type="text/javascript">
            $Dinheiro = parseInt($Dinheiro = "<?php print $Dinheiro['COUNT(n.id_tipos_doacoes)'] ?>");
            $Alimento = parseInt($Alimento = "<?php print $Alimento['COUNT(n.id_tipos_doacoes)'] ?>");
            $Brinquedo = parseInt($Brinquedo = "<?php print $Brinquedo['COUNT(n.id_tipos_doacoes)'] ?>");
			$Roupa = parseInt($Roupa = "<?php print $Roupa['COUNT(n.id_tipos_doacoes)'] ?>");
			$Plimpeza = parseInt($Plimpeza = "<?php print $Plimpeza['COUNT(n.id_tipos_doacoes)'] ?>");
			$Phigiene = parseInt($Phigiene = "<?php print $Phigiene['COUNT(n.id_tipos_doacoes)'] ?>");
			$eletrodomestico = parseInt($eletrodomestico = "<?php print $eletrodomestico['COUNT(n.id_tipos_doacoes)'] ?>");
			$moveis = parseInt($moveis = "<?php print $moveis['COUNT(n.id_tipos_doacoes)'] ?>");
			$ainfo = parseInt($ainfo = "<?php print $ainfo['COUNT(n.id_tipos_doacoes)'] ?>");
			$outro = parseInt($outro = "<?php print $outro['COUNT(n.id_tipos_doacoes)'] ?>");
			
            var options1 = {
                responsive:true
            };
               
            var data1 = [
				{
                    value: $Dinheiro,
                    color: "#46BFBD",
                    highlight: "#FFFFFF",
                    label: "Dinheiro"
                },
                {
                    value: $Alimento,
                    color:"#F7464A",
                    highlight: "#FFFFFF",
                    label: "Alimentos"
                },
				{
                    value: $Brinquedo,
                    color: "#227788",
                    highlight: "#FFFFFF",
                    label: "Brinquedos"
                },
				{
                    value: $Roupa,
                    color: "#AA12D5",
                    highlight: "#FFFFFF",
                    label: "Roupas"
                },
				{
                    value: $Plimpeza,
                    color: "#555555",
                    highlight: "#FFFFFF",
                    label: "Produtos de limpeza"
                },
				{
                    value: $Phigiene,
                    color: "#777777",
                    highlight: "#FFFFFF",
                    label: "Produtos de higiene"
                },
				{
                    value: $eletrodomestico,
                    color: "#999999",
                    highlight: "#FFFFFF",
                    label: "Eletrodomésticos"
                },
				{
                    value: $moveis,
                    color: "#BBBBBB",
                    highlight: "#FFFFFF",
                    label: "Móveis"
                },
				{
                    value: $ainfo,
                    color: "#8542AA",
                    highlight: "#FFFFFF",
                    label: "Artigos de Informática"
                },
				{
                    value: $outro,
                    color: "#005687",
                    highlight: "#FFFFFF",
                    label: "Outros"
                },
            ]
        </script>  
		
    </div>
</div>