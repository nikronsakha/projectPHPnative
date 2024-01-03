<?php require 'incs/header.php' ?>
<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($contacts as $contact): ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title"><?= $contact['user'] ?></h5>
                            <p class="card-text"><?= $contact['number'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php require 'incs/sidebar.php' ?>
        </div>
    </div>
</main>
<?php require 'incs/footer.php' ?>


