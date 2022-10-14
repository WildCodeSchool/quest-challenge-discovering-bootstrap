<nav class="navbar navbar-dark navbar-expand-lg bg-primary fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Discovering Bootstrap 5.2</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Discovering Bootstrap 5.2</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-primary">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="#">Photos</a></li>
                <li><a class="dropdown-item" href="#">Articles</a></li>
                <li><a class="dropdown-item" href="#">Projects</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>