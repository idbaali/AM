<div class="p-actualite">
    <?php
    $actualites = getAllActualites();
    ?>
    <section class="">
        <div class="row mb-5 pt-5">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <h2>Actualité ACTION MEPHI</h2>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 actualite1">
                <a href="all_news"><i class="fa fa-eye me-2"></i>Voir toutes les actualités</a>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <?php foreach ($actualites as $actualite) : ?>
                            <div class="col-md-3 col-sm-12 col-xs-12 cardActualite">
                                <div class="card">
                                <img src="../assets/img/actualites/<?= $actualite['image']?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title text-light"><?= $actualite['categorie'] ?></h6>
                                        <p class="card-text">
                                        <?= substr($actualite['title'], 0, 200) ?>
                                        </p>
                                        <hr>
                                        <small><?= date('d/m/Y', strtotime($actualite['date']))?> | <?= $actualite['city']?> | <?= $actualite['country']?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                        <!-- <div class="col-md-3 col-sm-12 col-xs-12 cardActualite">
                            <div class="card">
                                <img src="../assets/img/cologne1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text-light">Actualité</h6>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <hr>
                                    <small>Publié le 03/07/2023 à 15:00 | Paris</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 cardActualite">
                            <div class="card">
                                <img src="../assets/img/cologne4.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text-light">Actualité</h6>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <hr>
                                    <small>Publié le 03/07/2023 à 15:00 | Paris</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 cardActualite">
                            <div class="card">
                                <img src="../assets/img/cologne2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title text-light">Actualité</h6>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <hr>
                                    <small>Publié le 03/07/2023 à 15:00 | Paris</small>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>