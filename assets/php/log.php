<?php 

    session_start();

    $log = $_POST["user"];
    $pass = $_POST["pass"];

    include "conec.php";

    $select = "SELECT pass, creator FROM users WHERE usurs = '$log'";

    try{
        $result = mysqli_query($connect, $select);

    if (!$result) {
        echo "<script language='javascript' type='text/javascript'>
                    alert ('houve algum erro');
                    window.location.href='../../index.php';
              </script>";
        exit;
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['pass'] == $pass) {
            if ($row['creator'] == "sim") {
                $_SESSION['login'] = $log;
                echo "<script language='javascript' type='text/javascript'>
                    alert ('login feito');
                    window.location.href='../pages/index-creator.php';
                </script>";
                exit;
            } else if ($row["creator"] == "não") {
                $_SESSION['login'] = $log;
                echo "<script language='javascript' type='text/javascript'>
                    alert ('login feito');
                    window.location.href='../../index.php';
                </script>";
                exit;
            }
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('senha incorreta');
                    window.location.href='../../index.php';
              </script>";
            exit;
        }
    } else {
        echo "<script language='javascript' type='text/javascript'>
                    alert ('sem registro, verificar email');
                    window.location.href='../../index.php';
              </script>";
        exit;
    }
        
    }catch(mysqli_sql_exception $e){
        die("Falha em logar" . $e->getMessage());
    }


    
?>