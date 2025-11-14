<?php

    session_start();

    $nome = $_POST["nome"];

    $tipo = $_POST["btn"];

    include "conec.php";



    $query2 = "SELECT descricao, salario FROM vagas WHERE nome = '$nome'";

    try{
        $select = mysqli_query($connect, $query2);

        if($select){
            $row = mysqli_fetch_array($select);

            $descricao = $row["descricao"];
            $salario = $row["salario"];

            $query = "INSERT INTO vagas_user (nome, descricao, salario) VALUES ('$nome', '$descricao', '$salario')";

        
        try{
            $insert = mysqli_query($connect, $query);

            if($insert){
                echo "<script language='javascript' type='text/javascript'>
                    alert ('Colocado na suas vagas');
                    window.location.href='../pages/index.user.php';
                </script>";
            }else{
                echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum erro');
                    window.location.href='../pages/index.user.php';
                </script>";
            }
        }catch(mysqli_sql_exception $e){
            die("Houve erro em inserir". $e->getMessage());
        }
    }else{
        echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum erro');
                    window.location.href='../pages/index.user.php';
                </script>";
    }
    }catch(mysqli_sql_exception $e){
        die("Houve um erro em verificar". $e->getMessage());
    }
    

?>