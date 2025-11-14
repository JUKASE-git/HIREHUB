<?php

include 'conec.php';


$nome = $_POST['nome'];

    $query = "DELETE FROM vagas_user WHERE nome = '$nome'";

    try {

        $delete = mysqli_query($connect, $query);

        if ($delete) {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('desistiu da vaga com sucesso');
                    window.location.href='../../index.php';
                </script>";
            exit;
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum problema');
                    window.location.href='../../index.php';
                </script>";
            exit;
        }
    } catch (mysqli_sql_exception $e) {
        die("Falha ao deletar" . $e->getMessage());
    }

    ?>