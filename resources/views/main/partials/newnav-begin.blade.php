  <div class="sidebar close">
      <div class="logo-details">
          <i>
              <img class="bx bx-menu" style="width: 25px; height: 25px;" src="images/gt-icon.png" alt="icon">
          </i>
          <span class="logo_name" style="font-size: 18px;">goTournament</span>
          <i class="bx bx-menu" style="display: none;" id="btn"></i>
      </div>
      <ul class="nav-links">
          <li>
              <a href="/organizations" id="inicio">
                  <i class='bx bx-home'></i>
                  <span class="link_name">Início</span>
              </a>
              <ul class="sub-menu blank">
                  <li><a class="link_name" href="#">Início</a></li>
              </ul>
          </li>
          <li>
              <div class="iocn-link" id="meustorneios">
                  <a href="/tournament" id="tournament">
                      <i class='bx bx-sitemap'></i>
                      <span class="link_name">Torneios</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow'></i>
              </div>
              <ul class="sub-menu">
                  <li><a class="link_name" href="#">Torneios</a></li>
                  <li><a href="#">CSGO</a></li>
                  <li><a href="#">LOL</a></li>
              </ul>
          </li>
          <li>
              <div class="iocn-link" id="minhasequipes">
                  <a href="/teams">
                      <i class='bx bxs-group'></i>
                      <span class="link_name">Times</span>
                  </a>
                  <ul class="sub-menu blank">
                      <li><a class="link_name" href="#">Times</a></li>
                  </ul>
              </div>
          </li>
          <li>
              <a href="/matchs" id="partidas">
                  <i class='bx bx-table'></i>
                  <span class="link_name">Partidas</span>
              </a>
              <ul class="sub-menu blank">
                  <li><a class="link_name" href="#">Partidas</a></li>
              </ul>
          </li>
          <li>
              <a href="/accountdetails" id="config">
                  <i class='bx bx-cog'></i>
                  <span class="link_name">Configurações</span>
              </a>
              <ul class="sub-menu blank">
                  <li><a class="link_name" href="/accountdetails">Configurações</a></li>
              </ul>
          </li>
          @if ($user->id == 1)
          <li>
              <a href="/usersadmin" id="usersadmin">
                  <i class='bx bxs-user-badge'></i>
                  <span class="link_name">Usuários</span>
              </a>
              <ul class="sub-menu blank">
                  <li><a class="link_name" href="/usersadmin">Usuários</a></li>
              </ul>
          </li>
          @endif
          <li>
              <div class="profile-details">
                  <div class="profile-content">
                      <img src="images/user-example.jpg" alt="profileImg">
                  </div>
                  <div class="name-job">
                      <div class="profile_name">
                          @if (isset($user))
                          {{$user->username}}
                          @endif
                      </div>
                      <div class="job">seja bem-vindo!</div>
                  </div>
                  <a href="{{route('site.logout')}}">
                      <i class='bx bx-log-out'></i>
                  </a>
              </div>
          </li>
      </ul>
  </div>
  <section class="home-section" style="background-color: #56606B;">
      <div class="home-content">