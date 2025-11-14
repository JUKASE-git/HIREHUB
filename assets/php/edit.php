<?php
    session_start();

    include "conec.php";

    $nome = $_POST["nome"];
    $salario = $_POST["price"];
    $descricao = $_POST["desc-vaga"];

$query = "UPDATE vagas SET salario = '$salario', descricao = '$descricao' WHERE nome = '$nome'";

    try{
        $update = mysqli_query($connect, $query);

        if($update){
        echo "<script language='javascript' type='text/javascript'>
                    alert ('Atualização feita');
                    window.location.href='../pages/index-creator.php';
                </script>";
        }else{
        echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum problema');
                    window.location.href='../pages/index-creator.php';
                </script>";
        }
    }catch(mysqli_sql_exception $e){
        die("Erro no update". $e->getMessage());
    }

?>