<!-- /*Conexão com o banco de dados*/ -->

<?php

const HOST = 'localhost';
const USER = 'root';
const PASSWORD = 'bcd127';
const DATABASE = 'db_dadosCadastro';

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if($conexao === false){

    echo "conexão ocorreu com sucesso!";

    die(mysqli_connect_error());

    

    
echo '<pre>';
var_dump($conexao);
echo '</pre>';

}
// return $conexao;


?>