<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid mx-4">
    <a class="nav-brand" href="index.php"><img src="img/Logo.png" alt="Logo" height="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (empty($_SESSION['id'])) { //utilizador não autenticado
        ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=login">Login</a>
          </li>
        <?php } else if (!empty($_SESSION['id'])) { //utilizador autenticado
        ?>
          <?php if (!empty($_SESSION['type']) && $_SESSION['type'] == 1) { //utilizador administrador
          ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?p=backoffice">Adminstration</a>
            </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=dashboard">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION['first_name'] ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="nav-link ms-2" href="index.php?p=account">Account</a></li>
              <li><a class="nav-link ms-2" href="index.php?p=logout">Logout</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>