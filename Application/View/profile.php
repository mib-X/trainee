<main class="main">
    <div class="container">
        <!-- Content here -->
        <div class="row justify-content-center my-5">
            <div class="col-sm-4 mr-3">
                <h2 class="py-3">mib-X</h2>
                <img src="<?php echo HOST . $image ;?>" alt="" class="user-logo">
            </div>
            <div class="col-sm-6">
                <h2 class="py-3">Данные пользователя</h2>
                <ul>
                    <li>Имя - <span><?php echo  $name; ?>  </span></span></li>
                    <li>E-mail - <span><?php echo  $email; ?>  </span></span></li>
                    <li>Дата рождения - <span><?php echo  $birthday; ?>  </span></span></li>
                    <li>Дата регистрации - <span><?php echo  $date_reg; ?>  </span></li>
                </ul>
            </div>


        </div>
    </div>
</main>


