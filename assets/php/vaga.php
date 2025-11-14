<?php

    session_start();

    $titulo = $_POST["tittle"];

    $descricao = $_POST["desc-vaga"];

    $salario = $_POST["price"];

    include "conec.php";

    $query = "INSERT INTO vagas (nome, descricao, salario) VALUES ('$titulo', '$descricao', '$salario')";

    try{
        $insert = mysqli_query($connect, $query);

        if(!$insert){
        echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum erro');
                    window.location.href='../pages/index-creator.php';
              </script>";
        exit;
        }

        echo "<script language='javascript' type='text/javascript'>
                    alert ('Vaga cadastrada');
                    window.location.href='../pages/index-creator.php';
              </script>";
        exit;

    }catch(mysqli_sql_exception $e){
        die("Falha em inserir". $e->getMessage());
    }



?>