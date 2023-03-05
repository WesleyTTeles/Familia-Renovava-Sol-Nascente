<?php

require_once 'mail-dna.php';

if(isset($_POST['nome']) && !empty($_POST['nome']) &&
    isset($_POST['fone']) && !empty($_POST['fone']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
            isset($_POST['datanascimento']) && !empty($_POST['datanascimento']) &&
                isset($_POST['estadocivil']) && !empty($_POST['estadocivil']) &&
                    isset($_POST['situacao']) && !empty($_POST['situacao']) )
                        {
                            $nome = $_POST['nome'];
                            $fone = $_POST['fone'];
                            $email = $_POST['email'];
                            $datanascimento = $_POST['datanascimento'];
                            $estadocivil = $_POST['estadocivil'];
                            $situacao = $_POST['situacao'];
                            
                            if(send($nome, $fone, $email, $datanascimento, $estadocivil, $situacao))
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