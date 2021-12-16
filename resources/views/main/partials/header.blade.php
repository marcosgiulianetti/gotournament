<div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px; height: 100vh; position: relative; float: left; z-index: 50;">
        <a href="/organizations" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img class="bi me-2" style="width: 32px; height: 32px;" src="images/gt-icon.png" alt="icon">
            <span class="fs-4" style="font-size: 1.5rem!important;">goTournament</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/organizations" id="inicio" class="nav-link text-white">
                    Início
                </a>
            </li>
            <li>
                <a href="/tournament" id="meustorneios" class="nav-link text-white">
                    Meus torneios
                </a>
            </li>
            <li>
                <a href="/teams" id="minhasequipes" class="nav-link text-white">
                    Minhas equipes
                </a>
            </li>
            <li>
                <a href="/matchs" id="partidas" class="nav-link text-white">
                    Partidas
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/user-example.jpg" alt="mdo" width="32" height="32" class="rounded-circle me-2">
                <strong>
                    @if (isset($user))
                        {{$user->username}}
                    @endif
                </strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="/construction">Configurações</a></li>
                <li><a class="dropdown-item" href="/construction">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route('site.logout')}}">Sair</a></li>
            </ul>
        </div>
    </div>

    <script>
        var url = window.location.pathname;
        if(url.includes('organizations') || url.includes('login')){
            var a = document.getElementById('inicio');
            a.classList.add('active');
        }
        if(url.includes('tournament')){
            var a = document.getElementById('meustorneios');
            a.classList.add('active');
        }
        if(url.includes('teams')){
            var a = document.getElementById('minhasequipes');
            a.classList.add('active');
        }
        if(url.includes('matchs')){
            var a = document.getElementById('partidas');
            a.classList.add('active');
        }
    </script>