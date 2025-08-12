<?php snippet('header') ?>

<section id="heroImage" style="background-image: url('<?= $page->Herobgimg()->toFile()->url() ?>');">
    <div class="container">
        <h2 class="h1 text-white"><?= $page->Herotext() ?></h2>
        <h3 class="h5 text-white pt-1"><?= $page->Herosubtitle() ?></h3>
        <hr>
    </div>
</section>
<section id="contactUs">
    <div class="container">
        <?php snippet('contactForm') ?>
    </div>
</section>

<section id="about">
    <div class="container py-5 my-5">
        <?php snippet('about') ?>
    </div>
</section>

<section id="reviewCTA">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Share Your Experience</h2>
                <a href="#" class="btn btn-cta">Leave Us a Review</a>
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>