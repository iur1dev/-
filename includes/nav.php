<body>
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow nav-h azulPresto">
        <a href="home.php"><img src="img/logo.png" alt="logo prestomed" class="tamanhoLogo me-4 ms-3 p-1"></a>
        <div class="text-light col px-2 row">
            <div class="fw-bold fs-5 text-center">
                <?php
                date_default_timezone_set('America/Sao_Paulo');
                $agora = date('H:i');

                if ($agora < '12:00') {
                    $hora = 'Bom dia ';
                } else if ($agora < '18:00') {
                    $hora = 'Boa tarde';
                } else {
                    $hora = 'Boa noite ';
                }

                echo $hora, $_SESSION['user']; ?></div>
        </div>
        <button class="navbar-toggler position-absolute d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav d-none d-lg-block">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3 text-light fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Sair <i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="menu-lateral-w d-lg-block bg-light sidebar collapse">
                <div class="position-sticky sidebar-sticky">
                    <div class="accordion accordion-flush accordion-menu" id="accordionFlushExample">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link px-2 active text-black fw-bold" aria-current="page" href="../prestosoc/home.php">
                                    <span class="menu-lateral-icon"></span>
                                    ATENDIMENTO
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="home.php">
                                    <span class="menu-lateral-icon"><i class="fa-solid fa-print"></i></span>
                                    Impressão de docs
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button accordion-button-menu collapsed nav-link px-2" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <span class="menu-lateral-icon"><i class="fa-solid fa-magnifying-glass"></i></i></span>
                                            Consultas
                                        </button>
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body accordion-body-menu">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link px-2" href="empresas.php">
                                                        <span class="menu-lateral-icon"><i class="fa-solid fa-building"></i></span>
                                                        Empresas
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link px-2" href="atendimentos.php">
                                                        <span class="menu-lateral-icon"><i class="fa-solid fa-clipboard-user"></i></span>
                                                        Atendimentos Diários
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link px-2" href="laboratorios.php">
                                                        <span class="menu-lateral-icon"><i class="fa-solid fa-flask-vial"></i></span>
                                                        Laboratórios
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link px-2" href="precos.php">
                                                        <span class="menu-lateral-icon"><i class="fa-solid fa-hand-holding-dollar"></i></span>
                                                        Pesquisa de Preços
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </li>
                    </div>
                </div>
            </nav>

            <main class="main-w px-md-4 col main-mb">