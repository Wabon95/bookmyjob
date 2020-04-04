<div class="container">

    <?php if (isset($_SESSION['connectedUser'])): ?> 
        <a href="/job_create">
            <button type="button" class="btn-add btn btn-primary my-2">Ajouter une offre</button>
        </a>
    <?php endif;

    foreach ($data['jobs'] as $job): ?>
        <div class="card bg-light mb-3">
            <div class="card-header d-flex justify-content-between align-items-center w-100">
                <h3><?= $job->getName() ?></h3>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-primary"><?= $job->getStatut() ?></button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" style="">
                            <a class="dropdown-item" href="#"><?= $job->getStatut() ?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Je dois relancer</a>
                            <a class="dropdown-item" href="#">J'ai un entretien</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">J'ai eu une réponse négative</a>
                            <a class="dropdown-item" href="#">Je n'ai pas eu de réponse</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $job->getEnterprise() ?></h5>
                <p class="card-text"><?= $job->getDescription() ?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>