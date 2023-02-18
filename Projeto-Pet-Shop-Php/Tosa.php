<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Tosa</title>
</head>
<body>
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
    <h1 id="inicio" class="inicio">Tosa</h1>
    <?php
        session_start();
        if(isset($_POST["tosa"])){
            $_SESSION['tosa1'] = $_POST["tosa"];
            echo"<div class='caixa-texto'>";
            echo"<p>Deseja confirmar sua escolha: <br>";
            foreach($_POST["tosa"] as $tosa)
        {
            echo "- " . $tosa . "<br>";
        }
            echo"
                </p>
                <form action='Tosa.php' method='post'
                style='align-items:center;'>
                <input type='submit' name='confirm' value='Sim'>
                <input type='submit' name='confirm'value='Não'>
                </form>"
                ;
                echo"<p>Caso aperte sim, você declara estar ciente que essa consulta substituirá qualquer outra marcada<br></p></div>";
            
        }
        if(isset($_POST['confirm'])){
            if($_POST['confirm'] == 'Sim'){
                echo  "<script>alert('{$_SESSION['nome']}, Muito obrigado por adquirir um de nossos serviços. Continue navegando!');</script>";
                if(isset($_SESSION['tosa1'])){$_SESSION['tosa'] = $_SESSION['tosa1'];}
            }else{
                echo  "<script>alert('{$_SESSION['nome']}, Ficamos muito triste que você não ainda não queira esse serviço, esperamos te ver novamente em breve! ');</script>";
        }
        }
else
{
}    
        if(isset($_SESSION['nome'])){

    ?>
    </div>
    <main>
        <div class="servi-container">
            <p class="infor">Temos muitas opções de tosa, escolha a melhor para você, confirme a opção escolhida no final da página</p>
            <form action="Tosa.php" method="post">
                <ul>
                    <li>
                        <ul>
                            Higiênica <input name="tosa[]"type="checkbox" value="Higiênica">
                            <li>
                                <p id="explica">A tosa higiênica é mais simples que nós temos, ela é apenas para tirar o excesso de pelo por questões higiênicas</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>Baby
                            <input name="tosa[]"type="checkbox" value="Baby">
                            <li>
                                <p id="explica">A tosa baby é destinada apenas para os cahorros de porte pequeno pois exige um pouco mais de cuidado</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>Completa
                            <input name="tosa[]"type="checkbox" value="Completa">
                            <li>
                                <p id="explica">A tosa completa, inclui todos os cachorros, e já contem hidratação junto</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            Com hidratação
                            <input name="tosa[]"type="checkbox" value="Com Hidratação">
                                <li>
                                    <p id="explica">Inclui a tosa higiênica com hidratação</p>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            Sem hidratação
                            <input name="tosa[]"type="checkbox" value="Sem Hidratação">
                            <li>
                                <p id="explica">Tosa completa sem hidratação, perfeita para quem quer economizar</p>
                            </li>
                        </ul>
                    </li>
                </ul><br>
                <button>Confirmar</button>
            </form>
        </div>
    </main>
    <?php
        }else{
            header("Location: Cadastro.php");
            die();
        }
?>
    <footer>
                <p class="copyright">© Desenvolvedor Emanuel - 2022</p>
                <p><div class="foot"><a href="server.php">Acessar meus dados cadastrados</a></div></p>
        </footer>
</body>
</html>