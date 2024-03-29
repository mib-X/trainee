<main class="main">
    <div class="container">
        <h1 class="h1">Please, sign in</h1>
        <!-- Content here -->
        <div class="row justify-content-center">

            <div class="col col-md-6">
                <form class="login my-5" action="" method="post">
                    <div class="form-group">
                        <label for="InputEmailLog">Email address</label>
                        <input type="email" class="form-control" id="InputEmailLog" aria-describedby="emailHelp" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="InputPasswordLog">Password</label>
                        <input type="password" class="form-control" id="InputPasswordLog" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Войти</button>
                </form>
                <div class="errors">

                    <?php
                    if (isset($errors)) {
                        foreach ($errors as $error) { ?>
                            <div class="text-danger">
                                <?php   echo $error; ?>
                            </div>
                        <?php       }
                    }
                    ?>
                </div>
                <a href="/register.php" class="reg-link">Register</a>
            </div>

        </div>
    </div>
</main>
