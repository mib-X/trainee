<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Posts</title>
    <!-- CSS only -->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'navigation.php'; ?>
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
                    <button type="submit" class="btn btn-primary mt-2">Зарегистрироваться</button>
                </form>
                <a href="login.php" class="reg-link">Login</a>
            </div>

        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
<!-- JS, Popper.js, and jQuery -->
<script src="../../js/jquery-3.6.0.slim.min.js"></script>
<script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
