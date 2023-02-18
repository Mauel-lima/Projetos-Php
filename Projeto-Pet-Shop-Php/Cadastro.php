<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Cadastro</title>
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
    <h1 id="inicio" class="inicio">Formulário de cadastro</h1>
    <?php
session_start();
    if(isset($_SESSION['nome'])){
    echo "<p class='infor'>Dados cadastrados com sucesso, aproveite os serviços oferecidos por nós</p>";
    }else{   
        echo  "<script>alert('Para utilizar qualquer serviço primeiro se cadastre');</script>";
}
        
?>
    <main>
        <form name="form1" action="verifica.php?valor=enviado" method="POST">
            <div class="form-containe">
                <label for="nameTutor">Nome do tutor do Pet:</label>
                <br>
                <input class="cadastro"type="name" name="nameTutor" required>
                <br>
                <label for="end">Endereço:</label>
                <br>
                <input class="cadastro"type="text" name="end" required>
                <br>
                <label for="namePet">Nome do Pet:</label>
                <br>
                <input class="cadastro"type="name" name="namePet" required>
                <br>
                <label for="raca">Raça:</label>
                <br>
                <input class="cadastro"type="text" name="raca" required>
                <br>
                <label for="idade">Idade do Pet:</label>
                <br>
                <input class="cadastro"type="number" name="Idade" required>
                <br>
                <label for="anos">Anos</label>
                <input type="radio" id="anos" name="tipo" value="anos" required>
                <label for="meses">Meses</label>
                <input type="radio" id="meses" name="tipo" value="meses" required>
                <br><br><br>
                <label for="doenca">Alguma doença:</label>
                <br>
                <textarea name="doenca" cols="30" rows="5" style="margin:10px 20px; text-align: left;"></textarea>  
                <button>Salvar dados</button>
            </div>
            <br><hr style="border: 1px solid black;">
        </form>
    </main>
    <footer>
                <p class="copyright">© Desenvolvedor Emanuel - 2022</p>
                <p><div class="foot"><a href="server.php">Acessar meus dados cadastrados</a></div></p>
    </footer>
</body>
</html>