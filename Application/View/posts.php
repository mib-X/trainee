<main class="main">
    <section class="posts">
        <div class="container">
            <!-- Content here -->
            <div class="row justify-content-center">
                <?php if (!empty($posts)) {
                    foreach ($posts as $post) : ?>
                        <div class="col-12 post border-bottom">
                            <h2 class="h2 post__title"><a href="/post/<?php echo $post['id']; ?>" ><?php echo $post['title']; ?></a></h2>
                            <div class="post__header">
                                <div class="post__author mr-3">
                                    <a href="#" class="author-link"></a><?php echo $post['author']; ?>
                                </div>
                                <div class="post__date"><?php echo $post['date_added']; ?></div>
                            </div>
                            <div class="post__body">
                                <img src="<?php echo $post['thumb']; ?>" alt="" class="post__img float-md-left mr-3 mb-3">
                                <div class="description">
                                    <?php echo $post['description']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                } else {
                    echo "Нет записей";
                } ?>
            </div>
        </div>
    </section>
</main>
