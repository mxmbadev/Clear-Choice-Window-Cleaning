<?php snippet('header') ?>

    <div class="container" style="background-image: url('<?= $page->Herobgimg()->url() ?>'); background-size: cover; background-position: center;">
        <h2><?= $page->Herotext() ?></h2>
        <h2><?= $page->Herosubtitle() ?></h2>
    </div>

<?php snippet('footer') ?>