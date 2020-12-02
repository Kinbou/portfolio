<h1>Bienvenue sur mon parcours</h1>
<div class="parcours">
    <div class="parcours__formations">
        <h2>Mes formations</h2>
        <?php foreach ($formations as $id => $formation) : ?>
            <p><span>Title : </span><?= $formation["TITLE"]  ?></p>
            <p><span>Ecole : </span><?= $formation["SCHOOL"]  ?></p>
            <p><span>Graduate : </span><?= $formation["GRADUATE"]  ?></p>
            <p><span>Date de début : </span><?= $formation["START_DATE"]  ?></p>
            <p><span>Date de Fin : </span><?= $formation["END_DATE"]  ?></p>
            <p><span>Description : </span><?= $formation["DESCRIPTION"]  ?></p>
        <?php endforeach; ?>
    </div>
    <div class="parcours__barre"></div>
    <div class="parcours__experiences">
        <h2>Mes expériences</h2>
        <?php foreach ($experiences as $experience) : ?>
            <p><span>Titre : </span><?= $experience->getTitle() ?></p>
            <p><span>compagnie : </span><?= $experience->getCompany() ?></p>
            <p><span>Description : </span><?= $experience->getDescription() ?></p>
            <p><span>Date de début : </span><?= $experience->getStart_date() ?></p>
            <p><span>Date de fin : </span><?= $experience->getEnd_date() ?></p>
        <?php endforeach; ?>
    </div>
</div>

