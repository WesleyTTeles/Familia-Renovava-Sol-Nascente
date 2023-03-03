<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'config-cursos.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send($nome_noivo, $fone_noivo, $email_noivo, $datanascimento_noivo, $nome_noiva, $fone_noiva, $email_noiva, $datanascimento_noiva){

    $query = "insert into alunos_curso_de_noivos (nome_noivo, fone_noivo, email_noivo, datanascimento_noivo, nome_noiva, fone_noiva, email_noiva, datanascimento_noiva) 
                values ('{$nome_noivo}', '{$fone_noivo}', '{$email_noivo}', '{$datanascimento_noivo}', '{$nome_noiva}', '{$fone_noiva}', '{$email_noiva}', '{$datanascimento_noiva}')";
    
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
        $mail->Subject .= 'Nova Inscrição para o Curso de Noivos - ' .$nome."";
        $mail->Body   .= "Dados Obtidos" ."<br>";
        $mail->Body   .= "Nome do Noivo: "    .$nome_noivo."<br/>";
        $mail->Body   .= "Fone do Noivo: "    .$fone_noivo."<br/>";
        $mail->Body   .= "Email do Noivo: "    .$email_noivo."<br/>";
        $mail->Body   .= "Data de Nascimento do Noiva: "    .$datanascimento_noivo."<br/>";
        $mail->Body   .= "Nome do Noiva: "    .$nome_noiva."<br/>";
        $mail->Body   .= "Fone do Noiva: "    .$fone_noiva."<br/>";
        $mail->Body   .= "Email do Noiva: "    .$email_noiva."<br/>";
        $mail->Body   .= "Data de Nascimento do Noiva: "    .$datanascimento_noiva."<br/>";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
        // echo "ERRO: {$mail->ErrorInfo}";
    }
}
