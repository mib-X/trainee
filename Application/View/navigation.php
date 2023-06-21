<!--<div class="container">-->
<!--    <nav class="nav border-bottom py-3">-->
<!--        <a class="nav-link border-right" href="/">Home</a>-->
<!--        <a class="nav-link border-right" href="/posts/">Posts</a>-->
<!--        <a class="nav-link border-right" href="/profile">Profile</a>-->
<!--        <a class="nav-link border-right" href="/test">test</a>-->
<!--    </nav>-->
<!--</div>-->
<div class="container">
    <nav class="nav border-bottom py-3">
        <?php foreach ($menu as $link => $value) : ?>
            <a class="nav-link border-right" href="<?php echo $link; ?>"><?php echo $value; ?></a>
        <?php endforeach; ?>
    </nav>
</div>