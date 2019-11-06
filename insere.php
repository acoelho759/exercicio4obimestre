<?php
		
            include("conexao.php");
            
           

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$salario = $_POST["salario"];
            $sexo = $_POST["sexo"];
            
            
			$insert =
			"INSERT INTO cadastro(
			 nome,email,salario,sexo) 
			 VALUES
			 ('$nome','$email','$salario','$sexo')";

			mysqli_query($conexao,$insert) or die("0");
			
			
				echo "1";
?>