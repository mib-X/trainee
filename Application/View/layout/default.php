<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- CSS only -->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
<?php echo $this->getPart('parts/header'); ?>
<?php echo $this->getPart('navigation'); ?>
<?php echo $content; ?>
<?php echo $this->getPart('parts/footer'); ?>
 <!-- JS, Popper.js, and jQuery -->
<script src="../../../js/jquery-3.6.0.slim.min.js"></script>
<script src="../../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>