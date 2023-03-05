<?php

require_once 'mail-pp.php';

if(isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['fone']) && !empty($_POST['fone']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['datanascimento']) && !empty($_POST['datanascimento']) &&
                isset($_POST['estadocivil']) && !empty($_POST['estadocivil']) )
                        {
                            $nome = $_POST['nome'];
                            $fone = $_POST['fone'];
                            $email = $_POST['email'];
                            $datanascimento = $_POST['datanascimento'];
                            $estadocivil = $_POST['estadocivil'];
                            
                            if(send($nome, $fone, $email, $datanascimento, $estadocivil))
                            {
                                echo "<script>alert('E-mail enviado com sucesso!');</script>";
                            }
                            else{
                                echo "E-mail nao enviado";
                            }
                        }else{
                            echo "preencha todos os campos";
                        }
?>