<?php
		//declaração de varieveis

		$valor1 = (double) 0;
		$valor2 = (double) 0;
		$opcao = (string) null;
		$resultado =(double) 0;

	/*O comando gettype verifica o tipo de dados na variável
		o comando settype força a mudança de uma variável */

	/* Exemplo de uma variavel que nasce do tipo inteiro e depois é
		covertida para sitring
	/*$nome =10;
	echo(gettype(nome));

	settype($nome, "string");

	echo (gettype($nome))

	strtoupper () -> coverte um texto para maiusculo
	strtolower() -> converte um texto para minusculo
	*/

	//validação para verificar se o botao foi clicado
	if(isset($_POST['btncalc'])) {
		//recebe os dados do formulario
		$valor1 = $_POST['txtn1'];
		$valor2 = $_POST ['txtn2'];
	
		
		//fazendo o tratamento da caixa vazia
		if ($_POST ['txtn1'] == "" || $_POST['txtn2'] == "") {
			echo ('<script> alert ("Coloque os valores"); </script>'); //fizemos isso apenas para o site dar uma alerta ao usuário
		}else{
			
		if(isset($_POST['rdocalc']))
			echo('<scrpit> alert("Favor escolher uma operação"); </script>');
		else{
		$opcao = strtoupper($_POST ['rdocalc']) ;
		//Processamento do calculo das operações
		if($opcao == 'SOMAR') 
			$resultado = $valor1 + $valor2;
		elseif ($opcao == 'SUBTRAIR')
			$resultado = $valor1 - $valor2;
		elseif ($opcao == 'MULTIPLICAR') 
			$resultado = $valor1 * $valor2;
		elseif ($opcao == 'DIVIDIR')
			$resultado =$valor1 / $valor2;
			}
		}
	}		





?>
<html>
    <head>
        <title>Calculadora - Simples</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
                Calculadora Simples
            </div>

            <div id="form">
                <form name="frmcalculadora" method="post" action="calculadora_simples.php">
						Valor 1:<input type="text" name="txtn1" value="0" > <br>
						Valor 2:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" >Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
							<?php echo ($resultado);?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

