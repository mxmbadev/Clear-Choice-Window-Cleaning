<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?></title>
    <?= css([
        'assets/css/bootstrap.min.css',
        'assets/css/main.css'
    ]) ?>
</head>

<body>
    <?php snippet(name: 'nav') ?>
    <!-- Left and Right spacing -->
    <div class="mx-3">