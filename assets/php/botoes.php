<?php

session_start();


include 'conec.php';

$tipo = $_POST['btn'];
$nome = $_POST['nome'];

if ($tipo == 'del') {
    $query = "DELETE FROM vagas WHERE nome = '$nome'";

    try {

        $delete = mysqli_query($connect, $query);

        if ($delete) {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('Vaga deletada');
                    window.location.href='../pages/index-creator.php';
                </script>";
            exit;
        } else {
            echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum problema');
                    window.location.href='../pages/index-creator.php';
                </script>";
            exit;
        }
    } catch (mysqli_sql_exception $e) {
        die("Falha ao deletar" . $e->getMessage());
    }
} else if ($tipo == "edit") { ?>



    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina de edição</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body>
        <header class="header-index">
        <div class="top-bot">
            <div class="side">
                <a href="../../index.php"><img src="../img/HIREHUB.png" alt=""></a>
            </div>
            <div class="side actions">
                <div class="user-icon-loged">
                    <button class="user-button-loged" id="user-icon"><svg width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                                fill="currentColor" />
                            <path
                                d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                                fill="currentColor" />
                        </svg>
                        <h6><?php echo $_SESSION['login']; ?></h6>
                    </button>
                </div>
            </div>
        </div>
        <div class="top-bot nav">
            <nav>
                <ul>
                    <a href="../../index.php" class="link-nav text-blue">
                        <li class="nav">Pagina Inicial</li>
                    </a>
                    <a href="../pages/about.php" class="link-nav text-green">
                        <li class="nav">Sobre Nós</li>
                    </a>
                    <a href="../pages/FAQ.php" class="link-nav text-blue">
                        <li class="nav">FAQ</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <form action="edit.php" method="post" class="edit-form">
            <input type='hidden' name='nome' value='<?php echo $nome ?>'>
            <label for="desc-vaga">Insira a descrição da vaga: </label>
            <input type="text" name="desc-vaga" id="desc-vaga" placeholder="Ex: Area administrativa" required>
            <label for="price">Insira o salario: </label>
            <input type="number" name="price" id="price" min="750" placeholder="Ex: R$1558" required>
            <input type="submit" value="Criar" class="sbt">
        
    
    </form>
    </main>
    </body>

    </html>

<?php } else {
    echo "<script language='javascript' type='text/javascript'>
                    alert ('Houve algum problema');
                    window.location.href='../pages/index-creator.php';
                </script>";
}


?>