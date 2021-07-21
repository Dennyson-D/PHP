	<?php 
		include 'header.php';
		$aula_atual = 'valida-formularios';
	?>

	<?php
	 function clean_input($data)
	 {
		 $cleandata = trim($data); // tirar espaços em branco
		 $cleandata = stripslashes($cleandata) //para tirar barras invertidas
	 }
	?>

	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Envie seus dados</h3>

		<?php 
		 if($_SERVER['REQUEST_METHOD'] == 'POST')
		 {
			$nome = $_POST['nome'];
			$email = $_POST['email']; 

			if ($nome == "")
			{
				$erro_nome = '* O nome é obrigatório';
			} elseif($email == "")
			{
				$erro_email = '* O E-mail é obrigatório';
			} elseif(filter_var($email,FILTER_VALIDATE_EMAIL) == false)
			{
				$erro_email = '* E-mail inválido';
			}
		 }
		?>
		

		<pre><?php echo ($_SERVER['REQUEST_METHOD']); ?> </pre>

		<form action="valida-formularios.php" method="post">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field">
			<br>
			<div class="erro-form"> <?php echo $erro_nome; ?></div>
			<br>
			
			E-mail: *
			<br>
			<input type="text" name="email" class="field">
			<br>
			<div class="erro-form"> <?php echo $erro_email; ?> </div>
			<br>

			<input type="submit" name="submit" class="submit"><br>
			<div class="sucesso-form">Sucesso</div>
		</form>



		<h3>Confirmaçao</h3>
		<pre><?php print_r($_POST); ?></pre>

		



		

		

		
		








		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>