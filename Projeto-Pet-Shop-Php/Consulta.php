<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Consulta</title>
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
    <h1 id="inicio" class="inicio">Consulta</h1>
        
        <?php
        session_start();
        function inverteData($data){
            if(count(explode("/",$data)) > 1){
                return implode("-",array_reverse(explode("/",$data)));
            }elseif(count(explode("-",$data)) > 1){
                return implode("/",array_reverse(explode("-",$data)));
            }
        }
        if(isset($_POST["data"])){
            if(isset($_POST['vetreinario'])){
                if(isset($_POST['consulta'])){
                    $_SESSION['consulta1'] = $_POST['consulta'];
                    $_SESSION['veterinario1'] = $_POST['vetreinario'];
                    $_SESSION['data1'] = inverteData($_POST["data"]);
                    echo"<div class='caixa-texto'>";
                    echo"<p>Deseja marcar uma consulta no dia {$_SESSION['data1']}<br>Com o veterinário(a) {$_SESSION['veterinario1']}<br>
                    Pelo seguinte motivo:{$_SESSION['consulta1']}<br>";
                    echo"
                        <form action='Consulta.php' method='post'
                        style='align-items:center;'>
                        <input type='submit' name='confirm' value='Sim'>
                        <input type='submit' name='confirm'value='Não'>
                        </form></p>"
                        ;
                        echo"<p>Caso aperte sim, você declara estar ciente que essa consulta substituirá qualquer outra marcada<br></p></div>";
                }
            }
        }
        if(isset($_POST['confirm'])){
            if($_POST['confirm'] == 'Sim'){
                echo  "<script>alert('{$_SESSION['nome']}, Muito obrigado por adquirir um de nossos serviços. Continue navegando!');</script>";
                if(isset($_SESSION['data1'])){$_SESSION['data'] = $_SESSION['data1']; $_SESSION['veterinario'] = $_SESSION['veterinario1']; $_SESSION['consulta'] = $_SESSION['consulta1'];}
            }else{
                echo  "<script>alert('{$_SESSION['nome']}, Ficamos muito triste que você não ainda não queira esse serviço, esperamos te ver novamente em breve! ');</script>";

            }
        }
else
{
}    
        if(isset($_SESSION['nome'])){
    ?>
    <main>
        <div class="Consulta-container">
            <p class="infor">Para que sua consulta seja marcada, precisamos de algumas informações</p>
            <form action="Consulta.php" method="post">
                <label for="Dia">Informe o dia desejado para a consulta:</label><br>
                <input type="date" name="data" class="cadastro" required><br><br>
                <h3 style="color: black; margin: 5px;">Veterinários Disponiveís</h3><br>
                <label for="emanuel">Emanuel</label>
                <input type="radio" name="vetreinario" value="Emanuel" >
                <label for="Barbara">Barbara</label>
                <input type="radio" value="Barbara" name="vetreinario"  >
                <label for="Marcos">Marcos</label>
                <input type="radio" value="Marcos" name="vetreinario" >
                <label for="Ana">Ana</label>
                <input type="radio" value="Ana" name="vetreinario" ><br><br>
                <label for="consulta">Qual é o motivo da consulta:</label><br>
                <textarea name="consulta" cols="30" rows="5" style="margin:10px; text-align: left;" required></textarea>
                <br>
                <button style="margin-left: 1%">Marcar Consulta</button>
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
