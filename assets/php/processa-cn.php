<?php

require_once 'mail-cn.php';

if(isset($_POST['nome_noivo']) && !empty($_POST['nome_noivo']) &&
    isset($_POST['fone_noivo']) && !empty($_POST['fone_noivo']) &&
        isset($_POST['email_noivo']) && !empty($_POST['email_noivo']) &&
            isset($_POST['datanascimento_noivo']) && !empty($_POST['datanascimento_noivo']) &&
                isset($_POST['nome_noiva']) && !empty($_POST['nome_noiva']) &&
                    isset($_POST['fone_noiva']) && !empty($_POST['fone_noiva']) &&
                        isset($_POST['email_noiva']) && !empty($_POST['email_noiva']) &&
                            isset($_POST['datanascimento_noiva']) && !empty($_POST['datanascimento_noiva']) )
                                {
                                    $nome_noivo = $_POST['nome_noivo'];
                                    $fone_noivo = $_POST['fone_noivo'];
                                    $email_noivo = $_POST['email_noivo'];
                                    $datanascimento_noivo = $_POST['datanascimento_noivo'];
                                    $nome_noiva = $_POST['nome_noiva'];
                                    $fone_noiva = $_POST['fone_noiva'];
                                    $email_noiva = $_POST['email_noiva'];
                                    $datanascimento_noiva = $_POST['datanascimento_noiva'];

                                    if(send($nome_noivo, $fone_noivo, $email_noivo, $datanascimento_noivo, $nome_noiva, $fone_noiva, $email_noiva, $datanascimento_noiva))
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