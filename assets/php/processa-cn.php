<?php

require_once 'mail-cn.php';

$nome_noivo = $_POST['nome_noivo'];
$fone_noivo = $_POST['fone_noivo'];
$email_noivo = $_POST['email_noivo'];
$datanascimento_noivo = $_POST['datanascimento_noivo'];
$nome_noiva = $_POST['nome_noiva'];
$fone_noiva = $_POST['fone_noiva'];
$email_noiva = $_POST['email_noiva'];
$datanascimento_noiva = $_POST['datanascimento_noiva'];

if(send($nome_noivo, $fone_noivo, $email_noivo, $datanascimento_noivo, $nome_noiva, $fone_noiva, $email_noiva, $datanascimento_noiva))
{
    require_once '../routes/obrigado-cursos.html';
}
else{
    echo "E-mail nao enviado";
}

?>