<?php 
	//conect banco
	$conecta = mysql_connect("localhost", "root", "16521652") or print (mysql_error()); 
	mysql_select_db("novo", $conecta);
	

    $doadores=mysql_query("SELECT COUNT(id_doadores) FROM doadores");
    $doadores=mysql_fetch_assoc($doadores);
	
	$instituicao=mysql_query("SELECT COUNT(id_instituicoes) FROM instituicoes");
    $instituicao=mysql_fetch_assoc($instituicao);
	
	$valor=mysql_query("SELECT SUM(valor_doacoes)FROM doacoes WHERE confirmacao_doacoes = '1'");
    $valor=mysql_fetch_assoc($valor);
	
	$maior=mysql_query("SELECT MAX(valor_doacoes) FROM doacoes;");
    $maior=mysql_fetch_assoc($maior);
	
	$mim=mysql_query("SELECT MIN(valor_doacoes) FROM doacoes");
    $mim=mysql_fetch_assoc($mim);
	
	// for date
	$dataAtual = date("Y-m-d");
	
	$valordia=mysql_query("SELECT SUM(valor_doacoes)FROM doacoes WHERE confirmacao_doacoes = '1' AND data_doacoes = '$dataAtual'");
    $valordia=mysql_fetch_assoc($valordia);
	
	$maiordia=mysql_query("SELECT MAX(valor_doacoes) FROM doacoes where data_doacoes = '$dataAtual'");
    $maiordia=mysql_fetch_assoc($maiordia);
	
	$mimdia=mysql_query("SELECT MIN(valor_doacoes) FROM doacoes where data_doacoes = '$dataAtual'");
    $mimdia=mysql_fetch_assoc($mimdia);
	
 ?>