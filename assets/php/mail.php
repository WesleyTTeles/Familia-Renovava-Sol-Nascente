<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send($nome, $fone, $email){

    $query = "insert into alunos_dna (nome, fone, email, data_nascimento, estado_civil, situacao) 
                values ('{$nome}', '{$fone}', '{$email}', '{$data_nascimento}', '{$estado_civil}', '{$situacao}')";
    
    $conexao = mysqli_connect('50.6.138.76', 'fam95562_user_cursos', 'yb^lIX^eLPXE', 'fam95562_cursos');
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
        $mail->Subject .= 'Nova Inscrição para o Curso de DNA - ' .$nome."";
        $mail->Body   .= "Dados Obtidos" ."<br>";
        $mail->Body   .= "Nome: "    .$nome."<br/>";
        $mail->Body   .= "Fone: "    .$fone."<br/>";
        $mail->Body   .= "Email: "    .$email."<br/>";
        $mail->Body   .= "Data de Nascimento: "    .$data_nascimento."<br/>";
        $mail->Body   .= "Estado Civil: "    .$estado_civil."<br/>";
        $mail->Body   .= "Situação: "    .$situacao."<br/>";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
        // echo "ERRO: {$mail->ErrorInfo}";
    }
}
