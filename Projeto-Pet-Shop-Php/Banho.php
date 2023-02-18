<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        ul{
            margin: 10px;
            margin-left: 10px;
        }
        li{
            margin:20px;
        }
        ul li ul li{
            list-style-type: none;
        }
        #explica{
            font-weight: bold;
            border: solid white;
            background-color: white;
            border-radius: 10px;
            padding:10px;
            color: black;
        }
        button{
            padding: 10px;
            font-size: medium;
            font-weight: bold;    
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Banho</title>
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
    <h1 id="inicio" class="inicio">Banho</h1>
    <?php
        session_start();
        if(isset($_POST["banho"])){
            $_SESSION['banho1']= $_POST["banho"];
            echo"<div class='caixa-texto'>";
            echo"<p>Deseja confirmar sua escolha:<br>";
            foreach($_POST["banho"] as $banho)
        {
            echo "- " . $banho . "<br>";
        }
            echo"
                </p>
                <form action='Banho.php' method='post'
                style='align-items:center;'>
                <input type='submit' name='confirm' value='Sim'>
                <input type='submit' name='confirm'value='Não'>
                </form>"
                ;
                echo"<p>Caso aperte sim, você declara estar ciente que esse substituirá qualquer outro pedido anterior<br></p></div>";
        }
        if(isset($_POST['confirm'])){
            if($_POST['confirm'] == 'Sim'){
                echo  "<script>alert('{$_SESSION['nome']}, Muito obrigado por adquirir um de nossos serviços. Continue navegando!');</script>";
                if(isset($_SESSION['banho1'])){$_SESSION['banho'] = $_SESSION['banho1'];}
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
            <p class="infor">Temos muitas opções de banho, fique à vontade, confirme a opção escolhida no final da página</p>
            <form action="Banho.php" method="post">
                <ul>
                    <li>
                        <ul>
                            Simples<input name="banho[]"type="checkbox" value="Simples">
                            <li>
                                <p id="explica">É o banho mais simples que nós temos, ele é apenas um banho de rotina</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>Baby
                            <input name="banho[]"type="checkbox" value="Baby">
                            <li>
                                <p id="explica">O banho baby é destinada apenas para os cahorros de porte pequeno pois exige um pouco mais de cuidado</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>Completo
                            <input name="banho[]"type="checkbox" value="Completo">
                            <li>
                                <p id="explica">O banho completo, inclui todos os cachorros, e já contém hidratação</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            Com hidratação
                            <input name="banho[]"type="checkbox" value="Com hidratação">
                                <li>
                                    <p id="explica">Inclui o banho simples com hidratação</p>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            Sem hidratação
                            <input name="banho[]"type="checkbox" value="Sem hidratação">
                            <li>
                                <p id="explica">O banho completo sem hidratação, perfeita para quem quer economizar</p>
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