<?php
// Pull all services from the Structure field
$all = $page->ourServices()->toStructure() ?? new Kirby\Cms\Structure();

// Filter helper (case-insensitive) for the "tags" field
$byTag = function ($list, $tag) {
    return $list->filter(function ($item) use ($tag) {
        $tags = array_map('strtolower', $item->category()->split()); // tags -> array
        return in_array(strtolower($tag), $tags, true);
    });
};

$commercial  = $byTag($all, 'Commercial');
$residential = $byTag($all, 'Residential');
?>

<!-- Toggle (tabs) -->
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <ul class="nav nav-pills gap-2" role="tablist" aria-label="Service type">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="commercial-tab"
                    data-bs-toggle="tab" data-bs-target="#commercial-panel"
                    type="button" role="tab" aria-controls="commercial-panel" aria-selected="true">
                    Commercial
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="residential-tab"
                    data-bs-toggle="tab" data-bs-target="#residential-panel"
                    type="button" role="tab" aria-controls="residential-panel" aria-selected="false">
                    Residential
                </button>
            </li>
        </ul>
    </div>
</div>

<!-- Panels -->
<div class="row mt-4">
    <div class="col-12">
        <div class="tab-content">
            <!-- Commercial -->
            <div class="tab-pane fade show active" id="commercial-panel" role="tabpanel" aria-labelledby="commercial-tab" tabindex="0">
                <div class="row g-3">
                    <?php foreach ($commercial as $svc): ?>
                        <div class="col-sm-4">
                            <div class="service-card h-100">
                                <h3 class="h5 mb-2"><?= esc($svc->serviceName()) ?></h3>
                                <p class="mb-0"><?= esc($svc->serviceDesc()) ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <?php if ($commercial->isEmpty()): ?>
                        <div class="col-12">
                            <p class="text-muted mb-0">No commercial services yet.</p>
                        </div>
                    <?php endif ?>
                </div>
            </div>

            <!-- Residential -->
            <div class="tab-pane fade" id="residential-panel" role="tabpanel" aria-labelledby="residential-tab" tabindex="0">
                <div class="row g-3 d-flex justify-content-center">
                    <?php foreach ($residential as $svc): ?>
                        <div class="col-sm-4">
                            <div class="service-card h-100">
                                <h3 class="h5 mb-2"><?= esc($svc->serviceName()) ?></h3>
                                <p class="mb-0"><?= esc($svc->serviceDesc()) ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <?php if ($residential->isEmpty()): ?>
                        <div class="col-12">
                            <p class="text-muted mb-0">No residential services yet.</p>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>