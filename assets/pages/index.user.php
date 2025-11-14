<?php
session_start();

   include "../php/conec.php";
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include '../php/header.php'; ?>

    <main>
        <div class="wrapper">
            <div class="first-view">
                <div class="content-first-view">
                    <div class="desc">
                        <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis provident deserunt
                            voluptatibus laudantium omnis delectus quos nam doloremque numquam doloribus culpa, quis
                            repellat ipsa, ea vero nihil voluptatem neque quas perspiciatis? Id illo alias dignissimos
                            blanditiis fuga fugit, in voluptatibus. Consequuntur est dignissimos doloremque laboriosam
                            ducimus. Ullam autem aut harum. ipsum dolor sit amet, consectetur adipisicing elit. Rerum
                            enim dolor, doloribus
                            impedit labore sunt voluptas quasi fuga nemo ratione culpa ad illo iure neque fugiat, illum
                            non. Maiores iste vero magni recusandae labore ipsam eos nostrum, inventore eveniet aliquid
                            veritatis officiis itaque adipisci, maxime, laborum iusto? Nam, velit explicabo!</h3>
                    </div>
                    <img src="../img/job-aplication.jpg" alt="">
                </div>
            </div>

            <div class="content">
                <div class="grid">
                   <?php

                    $query = "SELECT *FROM vagas";

                    $result = mysqli_query($connect, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $nome = htmlspecialchars($row['nome']);
                            $descricao = htmlspecialchars($row['descricao']);
                            $salario = htmlspecialchars($row['salario']);

                            echo "<div class='card background-blue'>
                                <header>
                                    <h2>Vaga $nome</h2>
                                    <h3>$descricao</h3> 
                                    <h3>Salario: $salario</h3>    
                                </header>
                                <footer>
                                    <form action='../php/cand.php' method='post'>
                                        <input type='hidden' name='nome' value='$nome'>
                                        <button class='edit' id='edit' type='submit' name='btn' value='candida'>Candidatar</button>

                                    </form>
                                 </footer>
                            </div>";
                        }
                    } else {
                        echo "<h1>Está sem vagas</h1>";
                    }
                    ?>
                </div>
            </div>

        </div>
    </main>
</body>
<script src="../script/main.js"></script>

</html>