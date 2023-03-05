<?php

require_once 'mail-germinar.php';

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$situacao = $_POST['situacao'];
$atuando = $_POST['atuando'];
$ministerio = $_POST['ministerio'];

if(send($nome, $fone, $email, $data_nascimento, $situacao, $atuando, $ministerio))
{
    require_once '../routes/obrigado-eventos.html';
}
else{
    echo "E-mail nao enviado";
}
                            
?>