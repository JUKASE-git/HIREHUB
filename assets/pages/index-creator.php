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
                    <Button class="create-card" id="create-card" onclick="mostrarForm()">Criar uma vaga</Button>
                    <div class="create-card-form" id="create-card-form">
                        <button id="return" class="return" onclick="hideForm()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path
                                    d="M73.4 297.4C60.9 309.9 60.9 330.2 73.4 342.7L233.4 502.7C245.9 515.2 266.2 515.2 278.7 502.7C291.2 490.2 291.2 469.9 278.7 457.4L173.3 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L173.3 288L278.7 182.6C291.2 170.1 291.2 149.8 278.7 137.3C266.2 124.8 245.9 124.8 233.4 137.3L73.4 297.3z" />
                            </svg>
                        </button>
                        <form action="../php/vaga.php" method="post">
                            <label for="tittle">Insira o titulo da vaga: </label>
                            <input type="text" name="tittle" id="tittle" placeholder="Ex: Auxiliar de escritorio" required>
                            <label for="desc-vaga">Insira a descrição da vaga: </label>
                            <input type="text" name="desc-vaga" id="desc-vaga" placeholder="Ex: Area administrativa" required>
                            <label for="price">Insira o salario: </label>
                            <input type="number" name="price" id="price" min="750" placeholder="Ex: R$1558" required>
                            <input type="submit" value="Criar" class="sbt">
                        </form>
                    </div>
                </div>
            </div>

            <div class="content">
                <h1>Suas vagas
                </h1>
                <div class="grid">  
                    <?php 
                    
                         $query = "SELECT *FROM vagas";

                         $result = mysqli_query($connect, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = htmlspecialchars($row['id']);
                            $nome = htmlspecialchars($row['nome']);

                            echo "<div class='card background-blue'>
                                <header>
                                    <h2>Vaga n'$id</h2>
                                    <h2>Titulo: $nome</h2>      
                                </header>
                                <footer>
                                    <form action='../php/botoes.php' method='post'>
                                        <input type='hidden' name='nome' value='$nome'>

                                        <button class='edit' id='edit' type='submit' name='btn' value='edit'>Editar</button>
                                        <button class='del' id='del' type='submit' name='btn' value='del'>Excluir</button>

                                    </form>
                                 </footer>
                            </div>";
                        }
                    }else{
                            echo "<h1 class='ttl'>Está sem vagas</h1>";
                         }
                    
                          ?>
                    
                    
                
            </div>
</div>
        </div>
    </main>
</body>
<script src="../script/main.js"></script>

</html>