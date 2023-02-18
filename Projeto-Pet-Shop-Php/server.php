<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>
        .dados{
        padding: 10px;
        border: solid #FFD400;
        font-size: 20px;
        margin-top: 2rem;
        background-color: white;
        text-align: center;
        color: black;
        text-shadow: 
        1px -1px 0 #5ba1cf,
        1px -1px 0 #5ba1cf, 
        1px -1px 0 #5ba1cf;
        }
    </style>
    <title>Servidor</title>
</head>
<body>
    <?php
    session_start();
if(isset($_SESSION['nome'])){
    ?>
    <header>
    <nav>
            <img id="logo" src="img/logo.png" alt="PetShopMauel" width="100">
            <ul>
            <li id="home"><a href="index.php">Home</a></li>
                <li><a href="Cadastro.php">Cadastro</a></li>
                <li id="serv">Serviços
                    <ul>
                        <li><a href="Banho.php">Banho</a></li>
                        <li><a href="Tosa.php">Tosa</a></li>
                    </ul>
                </li>
                <li><a href="Consulta.php">Consulta</a></li>
            </ul>        
        </nav>
    </header>
    <main>
        <h1 id="inicio" class="inicio">Dados e serviços cadastrados até o momento</h1>
        <?php
        if(isset($_SESSION['nome'])){
            echo"<h3 id='inicio' class='inicio'>Cadastro<br></h3>";
            if(isset($_SESSION['nome'])){
                echo"<p  class='dados'>Nome do tutor:<br>{$_SESSION['nome']}<br></p>";
            }
                if(isset($_SESSION['end'])){
                    echo"<p  class='dados'>Seu endereço: <br>{$_SESSION['end']}<br></p>";
                }
            
            if(isset( $_SESSION['namePet'])){
                echo"<p class='dados'>Nome do Pet:<br>{$_SESSION['namePet']}<br></p>";
            }
            if(isset($_SESSION['raca'])){
                echo"<p class='dados'>A raça do seu cachorro é:<br>{$_SESSION['raca']}<br></p>";
            }
            if(isset($_SESSION['idade'])){
                echo"<p class='dados'>Seu pet tem:<br>{$_SESSION['idade']} {$_SESSION['tipo']}<br></p>";
            }
            if(isset($_SESSION['doenca'])){
                if($_SESSION['doenca'] <> ''){
                echo"<p class='dados'>Descrição da doença:<br>{$_SESSION['doenca']}<br></p>";}
                else{
                    echo"<p class='dados'>Seu cachorro não possui doença<br></p>";
                }
            }
            if(isset($_SESSION["banho"])){
                if($_SESSION["banho"] <> ['']){
                    echo"<h3 id='inicio' class='inicio'>Serviços de banho<br></h3>";
                    echo"<p class='dados'>Você contratou os seguintes serviços de Banho<br>";
                    foreach($_SESSION["banho"] as $banho){
                        echo "-   $banho <br>";
                    }
                 echo"</p>";
                }
            }
            if(isset($_SESSION["tosa"])){
                if($_SESSION["tosa"] <> ['']){
                    echo"<h3 id='inicio' class='inicio'>Serviços de Tosa<br></h3>";
                    echo"<p class='dados'>Você contratou os seguintes serviços de Tosa<br>";
                    foreach($_SESSION["tosa"] as $banho){
                        echo "-   $banho <br>";
                    }
                echo"</p>";
                }
            }
			if(isset($_SESSION["data"])){
                if($_SESSION['data'] <> ''){
                echo"<h3 id='inicio' class='inicio'>Consulta marcada<br></h3>";
                echo"<p class='dados'>Consulta marcada para o dia {$_SESSION['data']}<br>Com o veterinário(a) {$_SESSION['veterinario']}<br>
                    Pelo seguinte motivo:{$_SESSION['consulta']}<br></p>";

                }}
            if(isset($_SESSION['comentario_home'])){
                if($_SESSION['comentario_home'] <> ''){
                    echo"<h3 id='inicio' class='inicio'>Comentário sobre o artigo<br></h3>";
                    echo"<p class='dados'>Você comentou sobre o artigo o seguinte:<br> {$_SESSION['comentario_home']}";
                }
            }
            
            
    }
        ?>
    </main>
    <footer>
                <p class="copyright">© Desenvolvedor Emanuel - 2022</p>
                <p><div class="foot"><a href="server.php">Acessar meus dados cadastrados</a></div></p>
    </footer>
</body>
<?php
        }else{
            header("Location: Cadastro.php");
            die();
        }
    ?>
</html>