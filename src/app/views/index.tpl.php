<?php require 'incs/header.php' ?>
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">


                    <?php foreach ($posts as $post): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><a href="post/<?= $post['slug']?>"><?= $post['slug'] ?></a></h5>
                                <p class="card-text"><?= $post['desk'] ?></p>
                                <a href="post/<?= $post['slug']?>">Открыть</a>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>

                <?php require 'incs/sidebar.php' ?>

            </div>
        </div>
    </main>
<?php require 'incs/footer.php' ?>