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

<secton id="services" class="py-5 my-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center toggle-options">
                <span>Commercial</span><span> | </span><span>Residential</span>
            </div>
            <div class="col-sm-12 toggle-menu-options">
                <div class="row commercial-services">
                    <div class="col-sm-4">
                        <div class="service-card">
                            <h3>Window Cleaning</h3>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h3>Pressure Washing</h3>
                    </div>
                    <div class="col-sm-4">
                        <h3>Office Cleaning</h3>
                    </div>
                </div>
                <div class="row residential-services">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</secton>

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