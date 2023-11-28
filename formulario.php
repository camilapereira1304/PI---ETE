<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	
	
	<?php 
		if (isset($_SESSION["ERROR"])) {
			echo '<script>'; 
			echo '	alert("' . $_SESSION["ERROR"] . '")';
			echo '</script>';
			unset($_SESSION["ERROR"]);
		}
	?>
	
    <title>Cadastro</title>
</head>
<body>
    
    <section>
        <div class="container">
            <div class="flex">
                
                <div class="txt-leads">
                    <h1>
                        Descubra mundos entre páginas.  <br>
                        <span>Sua próxima aventura literária você encontrará aqui!</span> 
                    </h1>

                    <img src="images/logo.png" alt="">

                    <p>Em breve você terá as melhores recomendações de livros na palma de suas mãos. <br> 
                    </p>
                </div><!--txt-leads-->

                <div class="form-leads">

                    <form name="cad" action="conexao.php" method="POST">
                            <h2>CADASTRO<br>
                            </h2>

                            <div class="input-box">
                                <label for="nome">Seu nome completo*:</label>
                                <input type="text" name="nome" id="nome" class="inputUser" required>
                            </div><!--input-box-->

                            <div class="input-box">
                                <label for="email">Seu e-mail*:</label>
                                <input type="text" name="email" id ="email" class="inputUser" required>
                            </div><!--input-box-->

                            <div class="input-box">
                                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                                <input type="date" name="data_nascimento" id="data_nascimento" required>
                                <br><br><br>
                            </div><!--input-box-->

                            <div class="btn-enviar">
                                <input type="submit" name="submit"  id="submit">
                            </div><!--btn-enviar-->
                    </form>
                </div><!--form-leads-->
            </div><!--flex-->
        </div><!--container-->
    </section>

</body>
</html>