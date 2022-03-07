<main class="main">
    <section class="posts">
        <div class="container">
            <!-- Content here -->
            <div class="row justify-content-center">
                <?php foreach ($posts as $post) : ?>
                <div class="col-12 post border-bottom">
                <h2 class="h2 post__title"><?php echo $post['title']; ?></h2>
                <div class="post__header">
                    <div class="post__author mr-3">
                        <a href="#" class="author-link"><?php echo $post['author']; ?></a>
                    </div>
                    <div class="post__date"><?php echo $post['post_date']; ?></div>
                </div>
                <div class="post__body">
                    <img src="<?php echo $post['thumb']; ?>" alt="" class="post__img float-md-left mr-3 mb-3">
                    <div class="description">
                        <?php echo $post['description']; ?>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
