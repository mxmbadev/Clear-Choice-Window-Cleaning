<?php snippet('header') ?>

<section id="heroImage" style="background-image: url('<?= $page->Herobgimg()->toFile()->url() ?>');">
    <div class="container">
        <h2 class="h1 text-white"><?= $page->Herotext() ?></h2>
        <h3 class="h5 text-white pt-1"><?= $page->Herosubtitle() ?></h3>
        <hr>
    </div>
</section>
<section id="contactUs" class="pb-5">
    <div class="container">
        <?php snippet('contactForm') ?>
    </div>
</section>

<section id="services" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 pb-4">
                <h2>
                    <small class="text-uppercase text-muted"><?= esc($page->servicesTitle()) ?></small>
                </h2>
                <p class="section__sub-title">
                    <?= esc($page->servicesSubTitle()) ?>
                </p>
            </div>

            <div class="col-sm-3">
                <?php if ($img = $page->servicesImg()->toFile()): ?>
                    <img class="services-img" src="<?= $img->url() ?>" alt="<?= esc($page->servicesTitle()) ?>">
                <?php endif ?>

            </div>
            <div class="col-sm-8 offset-sm-1">
                <?php snippet('services') ?>
            </div>
        </div>
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