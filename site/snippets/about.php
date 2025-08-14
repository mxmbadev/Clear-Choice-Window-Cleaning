<?php foreach ($page->contentSection()->toStructure() as $index => $section): ?>
    <?php
    $image = $section->contentSectionImg()->toFiles()->first();
    $isEven = $index % 2 === 1; // true for 2nd, 4th, etc.
    ?>
    <div class="row align-items-center pb-3 mb-5">

        <!-- Text Column -->
        <div class="col-md-4 <?= $isEven ? 'order-md-2 ps-5' : 'order-md-1 pe-5' ?>">
            <?php if ($section->headingSubtitle()->isNotEmpty()): ?>
                <h2>
                    <small class="text-uppercase text-muted">
                        <?= esc($section->headingTitle()) ?>
                    </small>
                </h2>
            <?php endif; ?>

            <?php if ($section->headingTitle()->isNotEmpty()): ?>
                <p class="section__sub-title">
                    <?= esc($section->headingSubtitle()) ?>
                </p>
            <?php endif; ?>

            <?php if ($section->contentSectionText()->isNotEmpty()): ?>
                <div class="mb-0 pt-3 content-text">
                    <?= $section->contentSectionText()->kt() ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Image Column -->
        <div class="col-md-8 <?= $isEven ? 'order-md-1' : 'order-md-2' ?>">
            <?php if ($image): ?>
                <img
                    src="<?= $image->url() ?>"
                    alt="<?= esc($image->alt()->or($section->headingTitle())) ?>"
                    class="img-fluid">
            <?php endif; ?>
        </div>

    </div>
<?php endforeach; ?>