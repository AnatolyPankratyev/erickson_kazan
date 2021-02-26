<div class="container mt-5 gal_photos">
    <h1 class="mb-5"><?=$cat_photos->title;?></h1>
    <div class="row">
        <?php if(!empty($photos)): ?>
            <?php foreach($photos as $photo): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <img src="<?=$photo->path;?>" alt="<?=$photo->id;?>">
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h3>В этой категории фотографий нет...</h3>
        <?php endif; ?>
    </div>
</div>