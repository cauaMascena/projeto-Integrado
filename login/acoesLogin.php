<?php

    session_start();

    require('../banco-de-dados/conexao.php');

    #### FUNÇÕES DE LOGIN/LOGOUT #####
    function realizarLogin($usuario, $senha, $conexao){

        $sql = "SELECT * FROM tbldadoscadastro
                WHERE usuario = '$usuario'";

        $resultado = mysqli_query($conexao, $sql);

        $dadosUsuario = mysqli_fetch_array($resultado);

        if(isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"]) &&  isset($dadosUsuario["senha"])){

            $_SESSION["usuarioId"] = $dadosUsuario["id"];
            $_SESSION["nome"] = $dadosUsuario["nome"];

            // echo $_SESSION["usuarioID"];
            // echo $_SESSION["nome"];

            header("location: ../listagem/index.php");

        }else{
            
            echo "login não realizado";

        }

    }

    switch ($_POST["acao"]) {
        case 'login':
            
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];

            // var_dump($_POST);
            realizarLogin($usuario, $senha, $conexao);

            break;

        case 'logout':
            // echo 'FAZENDO LOGOUT!';
            session_destroy();
            header("location: ../login/index.php");
        
        default:
            # code...
            break;
    }

    

?>