<?php

		
		$valor1 = (double) 0 ;
		$valor2 = (double) 0;
		$resultado = (double) 0;
			

		if(isset($_GET['btncalc'])){

		$somar = $_GET['rdocalc'];
		$subtrair = $_GET['rdocalc'];
		$multiplicar= $_GET['rdocalc'];
		$dividir = $_GET['rdocalc'];

		$operacao = $_GET ['rdocalc'];
	//tratamento para recuperar os checkbox que foram selecionados no formulario
	if($operacao == "somar"){
		$resultado = ($valor1 + $valor2);
	}else if ($operacao == "subtrair"){
		$resultado = ($valor1 - $valor2);
	}else if($operacao == "multiplicar"){
		$resultado = ($valor1 * $valor2);
	}else {
		$resultado = ($valor1 / $valor2);
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
                <form name="frmcalculadora" method="post" action="">
						Valor 1:<input type="text" name="txtn1" value="0" > <br>
						Valor 2:<input type="text" name="txtn2" value="0" > <br>
						<div id="container_opcoes">
							<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
							<input type="radio" name="rdocalc" value="subtrair" >Subtrair <br>
							<input type="radio" name="rdocalc" value="multiplicar" >Multiplicar <br>
							<input type="radio" name="rdocalc" value="dividir" >Dividir <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						</div>	
						<div id="resultado">
							<?php echo ($resultado)?>
	
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>

