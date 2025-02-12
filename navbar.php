<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TS "ATAŠE"</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/about.php') ? 'active' : ''; ?>" href="band.php">O bendu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/media.php') ? 'active' : ''; ?>" href="media.php">Medija</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($_SERVER['PHP_SELF'] == '/kontakt.php') ? 'active' : ''; ?>" href="kontakt.php">Kontakt</a>
                </li>
            </ul>
            <div class="navbar-right">
                <a class="btn btn-outline-light me-2" href="login_register.php">Prijava / Registracija</a>
            </div>
        </div>
    </div>
</nav>
