<?php

require_once 'mail-germinar.php';

if(isset($_POST['nome']) && 
    isset($_POST['fone']) && 
        isset($_POST['email']) && 
            isset($_POST['data_nascimento']) && 
                isset($_POST['situacao']) && 
                    isset($_POST['atuando']) && 
                        isset($_POST['ministerio']) )
                            {
                                $nome = $_POST['nome'];
                                $fone = $_POST['fone'];
                                $email = $_POST['email'];
                                $data_nascimento = $_POST['data_nascimento'];
                                $situacao = $_POST['situacao'];
                                $atuando = $_POST['atuando'];
                                $ministerio = $_POST['ministerio'];
                                
                                if(send($nome, $fone, $email, $data_nascimento, $situacao, $atuando, $ministerio))
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