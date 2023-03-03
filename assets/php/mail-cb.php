<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'config-cursos.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send($nome_do_pai, $fone_do_pai, $email_do_pai, $data_nascimento_do_pai, $nome_da_mae, $fone_da_mae, $email_da_mae, $data_nascimento_da_mae, $status_pai_igreja, $status_mae_igreja, $nome_do_bebe, $idade_do_bebe, $sexo_do_bebe){

    $query = "insert into alunos_consagracao_de_bebes (nome_do_pai, fone_do_pai, email_do_pai, data_nascimento_do_pai, nome_da_mae, fone_da_mae, email_da_mae, data_nascimento_da_mae, status_pai_igreja, status_mae_igreja, nome_do_bebe, idade_do_bebe, sexo_do_bebe) 
                values ('{$nome_do_pai}', '{$fone_do_pai}', '{$email_do_pai}', '{$data_nascimento_do_pai}', '{$nome_da_mae}', '{$fone_da_mae}', '{$email_da_mae}', '{$data_nascimento_da_mae}', '{$status_pai_igreja}', '{$status_mae_igreja}', '{$nome_do_bebe}', '{$idade_do_bebe}', '{$sexo_do_bebe}')";
    
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
        $mail->Subject .= 'Nova Inscrição para Consagração de Bebês - ' .$nome."";
        $mail->Body   .= "Dados Obtidos" ."<br>";
        $mail->Body   .= "Nome do Pai: "    .$nome_do_pai."<br/>";
        $mail->Body   .= "Fone do Pai: "    .$fone_do_pai."<br/>";
        $mail->Body   .= "Email do Pai: "    .$email_do_pai."<br/>";
        $mail->Body   .= "Data de Nascimento do Pai: "    .$data_nascimento_do_pai."<br/>";
        $mail->Body   .= "Nome da Mãe: "    .$nome_da_mae."<br/>";
        $mail->Body   .= "Fone da Mãe: "    .$fone_da_mae."<br/>";
        $mail->Body   .= "Email do Mãe: "    .$email_da_mae."<br/>";
        $mail->Body   .= "Data de Nascimento do Mãe: "    .$data_nascimento_da_mae."<br/>";
        $mail->Body   .= "Status do Pai na Igreja: "    .$status_pai_igreja."<br/>";
        $mail->Body   .= "Status do Mãe na Igreja: "    .$status_mae_igreja."<br/>";
        $mail->Body   .= "Nome do Bebê: "    .$nome_do_bebe."<br/>";
        $mail->Body   .= "Idade do Bebê: "    .$idade_do_bebe."<br/>";
        $mail->Body   .= "Sexo do Bebê: "    .$sexo_do_bebe."<br/>";
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
        // echo "ERRO: {$mail->ErrorInfo}";
    }
}
