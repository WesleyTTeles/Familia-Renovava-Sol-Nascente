<?php

require_once 'mail-cb.php';

if(isset($_POST['nome_do_pai']) && !empty($_POST['nome_do_pai']) &&
    isset($_POST['fone_do_pai']) && !empty($_POST['fone_do_pai']) &&
        isset($_POST['email_do_pai']) && !empty($_POST['email_do_pai']) &&
            isset($_POST['data_nascimento_do_pai']) && !empty($_POST['data_nascimento_do_pai']) &&
                isset($_POST['nome_da_mae']) && !empty($_POST['nome_da_mae']) &&
                    isset($_POST['fone_da_mae']) && !empty($_POST['fone_da_mae']) &&
                        isset($_POST['email_da_mae']) && !empty($_POST['email_da_mae']) &&
                            isset($_POST['data_nascimento_da_mae']) && !empty($_POST['data_nascimento_da_mae']) &&
                                isset($_POST['status_pai_igreja']) && !empty($_POST['status_pai_igreja']) &&
                                    isset($_POST['status_mae_igreja']) && !empty($_POST['status_mae_igreja']) &&
                                        isset($_POST['nome_do_bebe']) && !empty($_POST['nome_do_bebe']) &&
                                            isset($_POST['idade_do_bebe']) && !empty($_POST['idade_do_bebe']) &&
                                                isset($_POST['sexo_do_bebe']) && !empty($_POST['sexo_do_bebe']) )
                                                    {
                                                        $nome_do_pai = $_POST['nome_do_pai'];
                                                        $fone_do_pai = $_POST['fone_do_pai'];
                                                        $email_do_pai = $_POST['email_do_pai'];
                                                        $data_nascimento_do_pai = $_POST['data_nascimento_do_pai'];
                                                        $nome_da_mae = $_POST['nome_da_mae'];
                                                        $fone_da_mae = $_POST['fone_da_mae'];
                                                        $email_da_mae = $_POST['email_da_mae'];
                                                        $data_nascimento_da_mae = $_POST['data_nascimento_da_mae'];
                                                        $status_pai_igreja = $_POST['status_pai_igreja'];
                                                        $status_mae_igreja = $_POST['status_mae_igreja'];
                                                        $nome_do_bebe = $_POST['nome_do_bebe'];
                                                        $idade_do_bebe = $_POST['idade_do_bebe'];
                                                        $sexo_do_bebe = $_POST['sexo_do_bebe'];

                                                        if(send($nome_do_pai, $fone_do_pai, $email_do_pai, $data_nascimento_do_pai, $nome_da_mae, $fone_da_mae, $email_da_mae, $data_nascimento_da_mae, $status_pai_igreja, $status_mae_igreja, $nome_do_bebe, $idade_do_bebe, $sexo_do_bebe))
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