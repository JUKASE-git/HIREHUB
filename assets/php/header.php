<header class="header-index">
    <div class="top-bot">
        <div class="side">
            <a href="../../index.php"><img src="../img/HIREHUB.png" alt=""></a>
        </div>
        <div class="side actions">

            <div class="user-icon">
                <?php
                if (!isset($_SESSION['login'])) {
                ?><button class="user-button" id="user-icon" onclick="modalform()"><svg width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                                fill="currentColor" />
                            <path
                                d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                                fill="currentColor" />
                        </svg>

                    </button>
                <?php
                } else if (isset($_SESSION['login'])) { ?>
                   <a href="../php/Kill.php" class="Exit_Button"><button>Sair</button></a>
                    <button class="user-button-loged" id="user-icon"><svg width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                                fill="currentColor" />
                            <path
                                d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                                fill="currentColor" />
                        </svg>
                        <h6>
                            <?php
                            echo $_SESSION['login']; ?>
                        </h6>
                    </button>

                <?php
                }
                ?>
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
                <a href="../pages/minhas-vagas.php" class="link-nav text-blue">
                    <li class="nav">Minhas Vagas</li>
                </a>
            </ul>
        </nav>
    </div>
</header>
</div>

<script src="assets/script/main.js"></script>