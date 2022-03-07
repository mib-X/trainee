<main class="main">
    <div class="container">
        <!-- Content here -->
        <h1 class="h1">Register form</h1>
        <div class="row justify-content-center">
            <div class="col col-md-6">
                <form class="register my-5" action="" method="post">
                    <div class="form-group">
                        <label for="inputNameReg">Name</label>
                        <input type="text" class="form-control" id="inputNameReg">
                    </div>
                    <div class="form-group">
                        <label for="InputEmailReg">Email address</label>
                        <input type="email" class="form-control" id="InputEmailReg" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="InputPasswordReg">Password</label>
                        <input type="password" class="form-control" id="InputPasswordReg">
                    </div>
                    <div class="form-group">
                        <label for="InputConfirmPasswordReg"> Confirm Password</label>
                        <input type="password" class="form-control" id="InputConfirmPasswordReg">
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
                <a href="login.php" class="reg-link">Login</a>
            </div>

        </div>
    </div>
</main>