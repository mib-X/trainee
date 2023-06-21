<main class="main">
    <div class="container">
        <!-- Content here -->
        <h1 class="h1">Register form</h1>
        <div class="row justify-content-center">
            <div class="col col-md-6">
                <form class="register my-5 needs-validation " action="<?php echo HOST . '/register' ;?>" method="post">
                    <div class="form-group">
                        <label for="inputNameReg">Name</label>
                        <input type="text" class="form-control" id="inputNameReg" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="InputEmailReg">Email address</label>
                        <input type="email" class="form-control" id="InputEmailReg" aria-describedby="emailHelp" name="email" required>
                        <div class="invalid-feedback">
                            Please choose a unique and valid email.
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="InputPasswordReg">Password</label>
                        <input type="password" class="form-control" id="InputPasswordReg" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="InputConfirmPasswordReg"> Confirm Password</label>
                        <input type="password" class="form-control" id="InputConfirmPasswordReg" name="confirmPassword" required>
                        <span id='message'></span>
                    </div>
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
                    <button id='sendRegister' type="submit" class="btn btn-primary mt-2">Зарегистрироваться</button>
                </form>
                <a href="/login" class="reg-link">Login</a>
            </div>

        </div>
    </div>
</main>

