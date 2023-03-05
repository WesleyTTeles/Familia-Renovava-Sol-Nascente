<?php

require_once 'mail-dna.php';

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$datanascimento = $_POST['datanascimento'];
$estadocivil = $_POST['estadocivil'];
$situacao = $_POST['situacao'];

if(send($nome, $fone, $email, $datanascimento, $estadocivil, $situacao))
{
    require_once '../routes/obrigado-cursos.html';
}
else{
    echo "E-mail nao enviado";
}

?>