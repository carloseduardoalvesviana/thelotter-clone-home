<nav class="navbar navbar-expand-lg navbar-dark bg-light shadow">
    <div class="container-fluid px-lg-5">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="100" class="d-inline-block align-text-top" />
        </a>

        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-group">
                <li class="nav-item"><a class="nav-link text-dark active list-group-item-action m-2" aria-current="page"
                        href="#!">Loterias</a></li>
                <li class="nav-item"><a class="nav-link text-dark list-group-item-action m-2" href="#!">Rifas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark list-group-item-action m-2" href="#!">Promoções</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark list-group-item-action m-2" href="#!">Resultados/Info</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle m-2" href="#" data-bs-toggle="dropdown">Revista
                        Loteria
                    </a>
                    <ul class="dropdown-menu rounded-menu">
                        <li><a class="dropdown-item" href="#"> Nossos ganhadores</a></li>
                        <li><a class="dropdown-item" href="#"> Histórias lotéricas </a></li>
                        <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle m-2" href="#" data-bs-toggle="dropdown">Suporte
                    </a>
                    <ul class="dropdown-menu rounded rounded-menu">
                        <li><a class="dropdown-item" href="#"> Como funciona o serviço</a></li>
                        <li><a class="dropdown-item" href="#"> Bolões </a></li>
                        <li><a class="dropdown-item" href="#"> Pacotes loteria </a></li>
                        <li><a class="dropdown-item" href="#"> Entre em contato </a></li>
                    </ul>
                </li>

            </ul>

            <button class="btn btn-light bg-white rounded-pill abrirModalLogin" type="submit">
                <i class="bi bi-person"></i>
                Login / Registrar
            </button>
        </div>
    </div>
</nav>
