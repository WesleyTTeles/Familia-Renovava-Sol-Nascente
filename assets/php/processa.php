<?php

require_once 'mail.php';

if(isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['fone']) && !empty($_POST['fone']) &&
        isset($_POST['email']) && !empty($_POST['email']) )
            isset($_POST['data_nascimento']) && !empty($_POST['data_nascimento']) )
                isset($_POST['estado_civil']) && !empty($_POST['estado_civil']) )
                    isset($_POST['situacao']) && !empty($_POST['situacao']) )
                        {

                            $nome = $_POST['nome'];
                            $fone = $_POST['fone'];
                            $email = $_POST['email'];
                            $data_nascimento = $_POST['data_nascimento'];
                            $estado_civil = $_POST['estado_civil'];
                            $situacao = $_POST['situacao'];
                            
                            if(send($nome, $fone, $email, $data_nascimento, $estado_civil, $situacao))
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