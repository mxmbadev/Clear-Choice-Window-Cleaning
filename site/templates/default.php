<?php snippet('header') ?>

<section id="heroImage" style="background-image: url('<?= $page->Herobgimg()->toFile()->url() ?>');">
    <div class="container">
        <h2 class="h1 text-white"><?= $page->Herotext() ?></h2>
        <h3 class="h5 text-white pt-1"><?= $page->Herosubtitle() ?></h3>
        <hr>
    </div>
</section>

<?php snippet('footer') ?>
