<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/arrow-down?s=solid">
</head>

<body>
    <?php include '../php/header.php'; ?>
    <div class="cover-modal" id="cover-modal">
        <button class="close" id="close" onclick="fecharModal()">X</button>
        <div class="modal login" id="login">
            <form action="../php/log.php" method="post">
                <h1>Login</h1>
                <label for="user">Insira seu usuario</label>
                <input type="text" name="user" id="user" class="input user" placeholder="Usuário" required />
                <label for="pass"> Insira sua senha</label>
                <input type="password" name="pass" id="pass" class="input pass" placeholder="Senha" required />
                <input type="submit" class="submit">
            </form>
        </div>
        <div class="modal">
            <form action="../php/cadas.php" method="post">
                <h1>Cadastro</h1>
                <label for="user">Insira seu usuario</label>
                <input type="text" name="user" id="user" class="input user" placeholder="Usuário" required />
                <label for="pass"> Insira sua senha</label>
                <input type="password" name="pass" id="pass" class="input pass" placeholder="Senha" required />
                <label for="confPass"> Confirme sua senha</label>
                <input type="password" name="confPass" id="confPass" class="input pass" placeholder="Senha" required />
                <label for="creator" class="lblcheck">Empresa</label>
                <input type="checkbox" name="creator" id="check" class="check">
                <input type="submit" class="submit">
            </form>
        </div>
    </div>
    </div>
    </div>
    <main class="faq-main">
        <h1>Perguntas frequentes</h1>
        <div class="faqs">
            <div class="quests background-blue">
                <header>
                    <h2>Por que a HIREHUB?</h2>

                </header>
                <main>
                    <h3>A HIREHUB é uma agência de empregos especializada em conectar profissionais e empresas. Nosso
                        objetivo é facilitar o processo de recrutamento e ajudar candidatos a encontrarem as melhores
                        oportunidades de carreira, enquanto ajudamos empresas a recrutar talentos qualificados para suas
                        equipes.</h3>
                </main>
            </div>
            <div class="quests background-green">
                <header>
                    <h3>A HIREHUB cobra alguma taxa dos candidatos?</h3>
                </header>
                <main>
                    <h3>
                        Não, a HIREHUB não cobra nenhuma taxa dos candidatos. Nossos serviços de recrutamento são
                        totalmente
                        gratuitos para quem está buscando uma oportunidade de trabalho.
                    </h3>

                </main>
            </div>
            <div class="quests background-green">
                <header>
                    <h2>Quais tipos de empresas trabalham com a HIREHUB?</h2>
                </header>
                <main>
                    <h3>
                        A HIREHUB atende uma ampla variedade de empresas de diferentes setores, desde startups até
                        grandes corporações, passando por indústrias, tecnologia, saúde, comércio e muito mais.
                        Trabalhamos com empresas que buscam talentos para vagas temporárias, permanentes, estágios e
                        empregos de alto nível.
                    </h3>
                </main>
            </div>
            <div class="quests background-blue">
                <header>
                    <h2>Como posso me candidatar a uma vaga na HIREHUB?</h2>
                </header>
                <main>
                    <h3>
                        Para se candidatar a uma vaga, basta acessar nosso site, navegar pelas oportunidades disponíveis
                        e se inscrever diretamente na vaga de seu interesse. Após o envio do seu currículo, nossa equipe
                        irá analisar sua candidatura e entrar em contato caso seu perfil se encaixe na vaga.
                    </h3>
                </main>
            </div>
        </div>
    </main>
</body>
<script src="../script/main.js"></script>
</html>