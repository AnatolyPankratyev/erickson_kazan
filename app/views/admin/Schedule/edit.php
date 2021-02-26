<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование блока расписания
    </h1>
    <h4>
        <?= $schedule->title; ?>
    </h4>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <form action="<?= ADMIN; ?>/schedule/edit" method="post" data-toggle="validator">
                    <div class="box-body">

                        <div class="form-group has-feedback">
                            <label for="title">Название программы</label>
                            <input type="text" name="title" class="form-control" id="title"
                                   placeholder="Название программы"
                                   value="<?= h($schedule->title); ?>"
                                   required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="city">Город</label>
                            <input type="text" name="city" class="form-control" id="city" placeholder="Город"
                                   value="<?= h($schedule->city); ?>"
                                   required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="coach">Тренер</label>
                            <input type="text" name="coach" class="form-control" id="coach" placeholder="Тренер"
                                   value="<?= h($schedule->coach); ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="date_from">Дата начала</label>
                                    <p>Текущая дата: <?= h($schedule->date_from); ?></p>
                                    <select name="date_from" id="date_from" class="form-control dates_schedule" required>
                                        <option value="">Выберите дату</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="month_from">Месяц начала</label>
                                    <?php foreach ($months as $i => $v): ?>
                                        <?php if ($schedule->month_from == $i + 1): ?>
                                            <p>Текущий месяц: <?= h($v); ?></p>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <select name="month_from" id="month_from" class="form-control months_schedule" required>
                                        <option value="">Выберите месяц</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="date_to">Дата окончания</label>
                                    <p>Текущая дата: <?= h($schedule->date_to); ?></p>
                                    <select name="date_to" id="date_to" class="form-control dates_schedule" required>
                                        <option value="">Выберите дату</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="month_to">Месяц окончания</label>
                                    <?php foreach ($months as $i => $v): ?>
                                        <?php if ($schedule->month_to == $i + 1): ?>
                                            <p>Текущий месяц: <?= h($v); ?></p>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <select name="month_to" id="month_to" class="form-control months_schedule" required>
                                        <option value="">Выберите месяц</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="format">Формат обучение</label>
                            <?php if ($schedule->date_to == 1): ?>
                            <p>Текущее значение: Очно</p>
                            <?php else: ?>
                            <p>Текущее значение: Онлайн</p>
                            <?php endif; ?>
                            <select name="format" id="format" class="form-control" required>
                                <option value="">Выберите формат</option>
                                <option value="1">Очно</option>
                                <option value="2">Онлайн</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="time_from">Время начала</label>
                                    <p>Текущее значение: <?= h($schedule->time_from); ?></p>
                                    <select name="time_from" id="time_from" class="form-control time_schedule" required>
                                        <option value="">Выберите время</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="time_to">Время окончания</label>
                                    <p>Текущее значение: <?= h($schedule->time_to); ?></p>
                                    <select name="time_to" id="time_to" class="form-control time_schedule" required>
                                        <option value="">Выберите время</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?= $schedule->id; ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->