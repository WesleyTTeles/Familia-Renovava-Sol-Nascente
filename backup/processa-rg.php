<?php

require_once 'mail-rg.php';

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$situacao = $_POST['situacao'];
$nome_conjuge = $_POST['nome_conjuge'];
$fone_conjuge = $_POST['fone_conjuge'];
$email_conjuge = $_POST['email_conjuge'];
$data_nascimento_conjuge = $_POST['data_nascimento_conjuge'];
$situacao_conjuge = $_POST['situacao_conjuge'];
$reno_grupo = $_POST['reno_grupo'];

if(send($nome, $fone, $email, $data_nascimento, $situacao, $nome_conjuge, $fone_conjuge, $email_conjuge, $data_nascimento_conjuge, $situacao_conjuge, $reno_grupo))
{
    require_once '../routes/obrigado-cursos.html';
}
else{
    echo "E-mail nao enviado";
}

?>