	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		

		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
				$agora = time();
				echo date("d/m/y",$agora);
			?>
			
		</p>
		<br>

		<h3>Função mktime</h3>

			<?php
				#             hora,minuto,segundo,mes,dia,ano
				$nasc = mktime(0,0,0,2,1,1986);
				echo date("d/m/Y",$nasc);
				
			?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>

			<?php
				$dt2 = strtotime("now");
				echo date('d/m/Y', $dt2);
			?>

		<p>

		</p>
		<br>


		<h3>Função date</h3>

			<?php
				echo date("d/M/Y H:i:s");
			?>

		<p>

		</p>
		<br>

		<h3>Fuso horário</h3>

			<?php
				
			?>			

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

			<?php
				
			?>

		<p>

		</p>
		<br>


		




		<h3>Tabela de caracteres da função date</h3>

		


		<?php include 'tabela-date.php'; ?>


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>