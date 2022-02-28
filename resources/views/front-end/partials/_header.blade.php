<header class="fixed-top">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid g-0">
          <a class="col col-lg-4 navbar-brand" href="index.html">
            <img alt="Budget Training Online" src="{{ asset('assets/front/images/logo.png')}}" width="390"/>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-menu-button-wide" style="font-size: 2rem;"></i>
          </button>
          <div class="col col-lg-4 collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item d-block d-lg-none">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li class="nav-item dropdown d-block d-lg-none">
                <a class="nav-link btn btn-avatar d-block" href="index.html" data-bs-toggle="dropdown">
                  Hi, User
                  <img alt="" src="{{ asset('assets/front/images/avatar.png') }}"/>
                  <i class="bi bi-chevron-double-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="nav-link dropdown-item" href="#">MY ACCOUNT <i class="bi bi-chevron-double-down"></i> </a>
                    <ul class="submenu dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">PROFILE</a></li>
                      <li><a class="dropdown-item" href="#">PASSWORD</a></li>
                      <li><a class="dropdown-item" href="#">BILLING</a></li>
                      <li><a class="dropdown-item" href="#">ORDER </a></li>
                      <li><a class="dropdown-item" href="#">HISTORY </a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link dropdown-item" href="#">CERTIFICATE</a></li>
                  <li><a class="nav-link dropdown-item" href="#">SUPPORT </a></li>
                  <li><a class="nav-link dropdown-item" href="#">LOG OUT</a>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col col-lg-4 text-end d-none d-lg-inline-flex justify-content-end align-items-center">
            <ul class="navbar-nav d-inline-flex align-items-center">
              <li class="nav-item">
                <a class="btn btn-login" href="login.html">Login</a>
              </li>
              <!--<li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dashboard
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">STUDENT</a></li>
                      <li><a class="dropdown-item" href="#">MENU</a></li>
                  </ul>
              </li>-->
              <li class="nav-item dropdown">
                <a class="btn btn-avatar d-inline-flex align-items-center" href="index.html" data-bs-toggle="dropdown">
                  Hi, User
                  <img alt="" src="{{ asset('assets/front/images/avatar.png') }}"/>
                  <i class="bi bi-chevron-double-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">MY ACCOUNT &raquo; </a>
                    <ul class="submenu submenu-left dropdown-menu dropdown-menu-end">
                      <li><a class="dropdown-item" href="#">PROFILE</a></li>
                      <li><a class="dropdown-item" href="#">PASSWORD</a></li>
                      <li><a class="dropdown-item" href="#">BILLING</a></li>
                      <li><a class="dropdown-item" href="#">ORDER </a></li>
                      <li><a class="dropdown-item" href="#">HISTORY </a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">CERTIFICATE</a></li>
                  <li><a class="dropdown-item" href="#">SUPPORT </a></li>
                  <li><a class="dropdown-item" href="#">LOG OUT</a>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>