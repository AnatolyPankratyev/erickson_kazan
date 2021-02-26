<div class="container">
    <?php if(!empty($cat_videos)): ?>
        <?php foreach($cat_videos as $cat_video): ?>
            <h3><?=$cat_video->title;?></h3>
            <a href="videos/<?=$cat_video->alias;?>"><?=$cat_video->title;?></a>
        <?php endforeach; ?>

    <?php else: ?>
        <h3 class="mt-5 text-center">Видео пока нет, но скоро появятся</h3>
    <?php endif; ?>
</div>