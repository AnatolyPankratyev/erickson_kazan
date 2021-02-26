<section class="schedule">
    <h1>Расписание</h1>

   <!--  <div class="callback-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Оставьте заявку, чтобы узнать о предстоящих группах и программах</h4>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <button class="btn" data-toggle="modal" data-target="#callbackModal">Узнать</button>
                </div>
            </div>
        </div>
    </div> -->

    <?php if ($schedule): ?>
        <?php foreach ($schedule as $s): ?>
            <?php
            foreach ($months as $k => $v) {
                if ($s->month_from == $k + 1) {
                    $s->month_from = $v;
                }
            }
            foreach ($months as $k => $v) {
                if ($s->month_to == $k + 1) {
                    $s->month_to = $v;
                }
            }
            ?>
            <div class="container">
                <div class="schedule-item">
                    <div class="row">
                        <div class="col-md-8 d-flex flex-column justify-content-center align-items-start">
                            <h5><?= $s->title; ?></h5>
                            <h4>
                                <?php if ($s->format == 1): ?>
                                    Очно
                                <?php else: ?>
                                    Онлайн
                                <?php endif; ?>
                            </h4>
                            <h6>Тренер: <?= $s->coach; ?></h6>
                            <div class="schedule-item__actions">
                                <a href="/" class="btn btn--pay schedule-item__buy">Оформить покупку</a>
                                <button class="btn" data-toggle="modal" data-target="#callbackModal">Заявка</button>
                            </div>
                        </div>
                        <div class="col-md-4 sm-mt d-flex flex-column justify-content-center align-items-start">
                            <div class="row w-100">
                                <div class="col-lg-6">
                                    <p class="mb-0">Начало:</p>
                                    <h5><?= $s->date_from; ?> <?= $s->month_from; ?></h5>
                                </div>
                                <div class="col-lg-6">
                                    <p class="mb-0">Окончание:</p>
                                    <h5><?= $s->date_to; ?> <?= $s->month_to; ?></h5>
                                </div>
                            </div>
                            <h6 class="mt-4"><?= $s->time_from; ?> - <?= $s->time_to; ?></h6>
                            <p><?= $s->city; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>