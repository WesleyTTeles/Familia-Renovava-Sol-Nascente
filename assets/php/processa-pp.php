<?php

require_once 'mail-pp.php';

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$datanascimento = $_POST['datanascimento'];
$estadocivil = $_POST['estadocivil'];

if(send($nome, $fone, $email, $datanascimento, $estadocivil))
{
    require_once '../routes/obrigado-cursos.html';
}
else{
    echo "E-mail nao enviado";
}

?>