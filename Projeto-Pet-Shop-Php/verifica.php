<?php
 session_start();
    if(isset($_POST['comentario_home'])){
        $_SESSION['comentario_home'] = $_POST['comentario_home'];
        echo  "<script>alert('Comentário adicionado com sucesso');</script>";
        header("Location: index.php");
        die();
    }else{
        $_SESSION['nome'] = $_POST['nameTutor'];
        $_SESSION['namePet'] = $_POST['namePet'];
        $_SESSION['end'] = $_POST['end']; 
        $_SESSION['raca'] = $_POST['raca']; 
        $_SESSION['idade'] = $_POST['Idade'];
        $_SESSION['tipo'] = $_POST['tipo']; 
        $_SESSION['doenca'] = $_POST['doenca'];
        header("Location: Cadastro.php");
        die(); 
    }

    ?>