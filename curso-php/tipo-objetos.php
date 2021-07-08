<?php 
		include 'header.php';
		$aula_atual = 'tipo-objetos';
	?>


	<body>

		<h2>OBJETOS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>Propriedades</h3>
		<?php

		class carro{
			 public $ano;
			 public $modelo;
			 public $placa;
			 public $cpf_dono;

			 # usando construct

			function __construct($ano,$modelo,$placa,$cpf)
			{
				$this->ano  = $ano;
				$this->modelo = $modelo;
				$this->placa = $placa;
				$this->cpf_dono = $cpf;
			}
		}
        #   exemplo de como inserir valor na propriedade do objeto manualmente
		#$carro1 -> ano = 2013;

		#construct
		$carro1 = new carro(2013,'Classic','MK1144',485555);

		?>
		<h4>Propriedades do Objeto Carro1: </h4>
		<pre><?php print_r($carro1);  ?></pre>

		<h3>Métodos</h3>

		<h4>Dono do Carro1: </h4>
		<p></p>
		<br>
		
		<h4>---------- Troca do dono do carro ----------</h4>

		<br>

		<h4>Novo Dono do Carro1: </h4>
		<p></p>




		

		
	






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>