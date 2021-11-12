<?php

// include('../banco-de-dados/conexao.php');


function listar($conexão){



    $sql = "SELECT * FROM tbl_dadosusuario";



    $resultado = mysqli_query($conexão, $sql);



    return $resultado;



}



function inserir(){}



function alterar(){}



function excluir(){}








?>