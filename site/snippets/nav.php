<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?= $site->url() ?>"> <?= $site->title() ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach ($site->children()->listed() as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><?= $item->title() ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</nav>