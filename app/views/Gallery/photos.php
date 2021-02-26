<div class="container">
    <?php if(!empty($cat_photos)): ?>
    <div class="row">
            <?php foreach($cat_photos as $cat_photo): ?>
            <div class="col-md-6 my-3">
                <a href="photos/<?=$cat_photo->alias;?>" class="card-photos-a">
                    <div class="p-1 card_MC p-5">
                        <h5 class="text-center mt-3 mx-5"><?=$cat_photo->title;?></h5>
                    </div>
                </a>
            </div>

            <?php endforeach; ?>
    </div>
    <?php else: ?>
        <h3 class="mt-5 text-center">Фото пока нет, но скоро появятся</h3>
    <?php endif; ?>
</div>