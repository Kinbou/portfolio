<h1>Portfolio</h1>

<div class="portfolio">
    <?php foreach ($portfolio as $portfolio) : ?>
        <div class="portfolio__card">
            <p><span>Title: </span><?= $portfolio->getTitle() ?></p>
            <p><span>Date de création : </span><?= $portfolio->getCreation_date() ?></p>
            <p><span>Description : </span><?= $portfolio->getDescription() ?></p>
            <p><span>Lien : </span><a><?= $portfolio->getUrl() ?></a></p>
        </div>
    <?php endforeach; ?>
</div>