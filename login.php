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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'navigation.php'; ?>
<main class="main">
    <div class="container">
        <h1 class="h1">Please, sign in</h1>
        <!-- Content here -->
        <div class="row justify-content-center">

            <div class="col col-md-6">
                <form class="login my-5" action="" method="post">
                    <div class="form-group">
                        <label for="InputEmailLog">Email address</label>
                        <input type="email" class="form-control" id="InputEmailLog" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="InputPasswordLog">Password</label>
                        <input type="password" class="form-control" id="InputPasswordLog">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
                <a href="register.php" class="reg-link">Register</a>
            </div>

        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
<!-- JS, Popper.js, and jQuery -->
<script src="js/jquery-3.6.0.slim.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>