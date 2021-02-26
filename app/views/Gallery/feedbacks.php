<div class="container">
    <?php if(!empty($cat_feedbacks)): ?>
        <?php foreach($cat_feedbacks as $cat_feedback): ?>
            <h3><?=$cat_feedback->title;?></h3>
            <a href="feedbacks/<?=$cat_feedback->alias;?>"><?=$cat_feedback->title;?></a>
        <?php endforeach; ?>

    <?php else: ?>
        <h3 class="mt-5 text-center">Отзывов пока нет, но скоро появятся</h3>
    <?php endif; ?>
</div>