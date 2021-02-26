<section class="all-programs">
    <div class="container mt-4">
        <h1 class="text-center">Все программы</h1>
        <?php if ($programs): ?>
                <?php foreach ($programs as $program): ?>
                    <div class="row mt-4 programs-item">
                        <div class="col-md-4 px-0">
                            <img src="img/carousel/<?=$program->img;?>" alt="<?=$program->title;?>">
                        </div>
                        <div class="col-md-8 d-flex flex-column justify-content-around">
                            <h3><?=$program->title;?></h3>
                            <p><?=$program->content;?></p>
                            <div class="programs-btn text-right my-3">
                                <a href="main/<?=$program->href;?>">подробнее</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>