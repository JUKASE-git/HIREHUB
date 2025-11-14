<?php

    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $confpass = $_POST["confPass"];
    $creator = $_POST["creator"];

    if ($pass != $confpass) {
    echo "<script language='javascript' type='text/javascript'>
                    alert ('senhas diferentes');
                    window.location.href='../../index.php';

              </script>";
            exit;
    }

    include "conec.php";


    if ($creator) {

    $query = "INSERT INTO users (usurs, pass, creator) VALUES ('$user', '$pass', 'sim')";

    try{
        $insert = mysqli_query($connect, $query);

        if ($insert) {
            
            echo "<script language='javascript' type='text/javascript'>
                    alert ('cadastro bem feito');
                    window.location.href='../../index.php';
              </script>";
            exit;
            
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve um erro');
                    window.location.href='../../index.php';
              </script>";
            exit;
        }
    }catch(mysqli_sql_exception $e){
        die("Falha em inserir". $e->getMessage());        
    }

    
    
    }else if ($creator == false){
    $query = "INSERT INTO users (usurs, pass, creator) VALUES ('$user', '$pass', 'não')";

    try {
        $insert = mysqli_query($connect, $query);

        if ($insert) {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('cadastro bem feito');
                    window.location.href='../../index.php';

              </script>";
            exit;
           
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve um erro');
                    window.location.href='../../index.php';
              </script>";
            exit;
           
        }
    } catch (mysqli_sql_exception $e) {
        die("Falha em inserir" . $e->getMessage());
    }
    }else{
         echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve um erro');
                    window.location.href='../index.php';
              </script>";
            exit;
    }



?>
