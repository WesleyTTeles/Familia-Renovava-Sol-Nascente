<?php

require_once 'mail-cafe-gestao.php';

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$ramo_de_atuacao = $_POST['ramo_de_atuacao'];
$nome_da_empresa = $_POST['nome_da_empresa'];

if(send($nome, $fone, $email, $ramo_de_atuacao, $nome_da_empresa))
{
    require_once '../routes/obrigado-eventos.html';
}
else{
    echo "E-mail nao enviado";
}
                    
?>