<?php

require_once 'mail-germinar.php';

if(isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['fone']) && !empty($_POST['fone']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['data_nascimento']) && !empty($_POST['data_nascimento']) &&
                isset($_POST['situacao']) && !empty($_POST['situacao']) &&
                    isset($_POST['atuacao']) && !empty($_POST['atuacao']) &&
                        isset($_POST['ministerio']) && !empty($_POST['ministerio']) )
                            {
                                $nome = $_POST['nome'];
                                $fone = $_POST['fone'];
                                $email = $_POST['email'];
                                $data_nascimento = $_POST['data_nascimento'];
                                $situacao = $_POST['situacao'];
                                $atuacao = $_POST['atuacao'];
                                $ministerio = $_POST['ministerio'];
                                
                                if(send($nome, $fone, $email, $data_nascimento, $situacao, $atuacao, $ministerio))
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