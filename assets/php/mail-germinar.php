<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'config-germinar.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send($nome, $fone, $email, $data_nascimento, $situacao, $atuacao, $ministerio){

    $query = "insert into inscricoes_projeto_germinar (nome, fone, email, data_nascimento, situacao, atuacao, ministerio) 
                values ('{$nome}', '{$fone}', '{$email}', '{$data_nascimento}', '{$situacao}', '{$atuacao}', '{$ministerio}')";
    
    $conexao = mysqli_connect('50.6.138.76', 'fam95562_user_db', '99j^e2*LkLDp', 'fam95562_projeto_germinar');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);


    try {
        $mail = new PHPMailer(true);

        $mail->setLanguage('br');
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0; // 1 para debug
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.titan.email';
        $mail->Username = EMAIL_ORIGEM;
        $mail->Password = SENHA_EMAIL;
        $mail->Port = 587;
        $mail->setFrom(EMAIL_ORIGEM);
        $mail->addAddress(EMAIL_DESTINO);
        $mail->addReplyTo(EMAIL_DESTINO);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject .= 'Nova Inscrição para o Projeto Germinar - ' .$nome."";
        $mail->Body   .= "Dados Obtidos" ."<br>";
        $mail->Body   .= "Nome: "    .$nome."<br/>";
        $mail->Body   .= "Fone: "    .$fone."<br/>";
        $mail->Body   .= "Email: "    .$email."<br/>";
        $mail->Body   .= "Data de Nascimento: "    .$data_nascimento."<br/>";
        $mail->Body   .= "Situação: "    .$situacao."<br/>";
        $mail->Body   .= "Serve em Ministério?: "    .$atuacao."<br/>";
        $mail->Body   .= "Se sim, Qual ministério?: "    .$ministerio."<br/>";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
        // echo "ERRO: {$mail->ErrorInfo}";
    }
}
