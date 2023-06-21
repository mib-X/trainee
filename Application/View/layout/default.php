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
<?php //echo $this->getPart('navigation'); ?>
<?php echo $navigation; ?>
<?php echo $content; ?>
<?php echo $this->getPart('parts/footer'); ?>
 <!-- JS, Popper.js, and jQuery -->
<script src="../../../js/jquery-3.6.0.slim.min.js"></script>
<script src="../../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<?php
if ($page->get('view') == 'register'): ?>
    <script>
    // Находим input'ы и button
    const input1 = document.querySelector('#InputPasswordReg');
    const input2 = document.querySelector('#InputConfirmPasswordReg');
    const submitButton = document.querySelector('#sendRegister');

    // Функция, которая проверяет совпадение значений input'ов
    function checkInputs() {
        if (input1.value === input2.value) {
            submitButton.disabled = false; // Включаем кнопку
            $('#message').html('ok').css('color', 'green'); // пишем сообщение
        } else {
            submitButton.disabled = true; // Выключаем кнопку
            $('#message').html('Пароли не совпадают').css('color', 'red'); // пишем сообщение
        }
    }

    // Слушаем событие изменения значения input'ов
    input1.addEventListener('input', checkInputs);
    input2.addEventListener('input', checkInputs);
</script>
<?php endif; ?>

</body>
</html>