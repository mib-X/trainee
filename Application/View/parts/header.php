<header class="header">
    <div class="container d-flex flex-row justify-content-between">
        <a href="/"><div class="logo">Trainee site</div></a>
        <?php if(isset($_SESSION['userName'])) : ?>
        <div class="dropdown header__login-links float-right">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['userName']; ?>
            </a>
            <ul class="dropdown-menu header__login-links__list" aria-labelledby="dropdownMenuLinkLogged">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
        </div>
        <?php else: ?>
        <div class="dropdown header__login-links float-right">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Login
            </a>

            <ul class="dropdown-menu header__login-links__list" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/register">Register</a></li>
                <li><a class="dropdown-item" href="/login">Login</a></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</header>
