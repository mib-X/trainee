<main class="main">
    <section class="posts">
        <div class="container">
            <!-- Content here -->
            <div class="row justify-content-center">
                    <div class="col-12 post border-bottom">
                        <h2 class="h2 post__title"><?php echo $title; ?></h2>
                        <div class="post__header">
                            <div class="post__author mr-3">
                                <a href="#" class="author-link"></a><?php echo $author; ?>
                            </div>
                            <div class="post__date"><?php echo $post_date; ?></div>
                        </div>
                        <div class="post__body">
                            <img src="<?php echo $thumb; ?>" alt="" class="post__img float-md-left mr-3 mb-3">
                            <div class="description">
                                <?php echo $description; ?>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</main>
