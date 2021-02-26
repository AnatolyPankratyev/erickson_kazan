<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Добавление (расписание)
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <form action="<?= ADMIN; ?>/schedule/add" method="post" data-toggle="validator">
                    <div class="box-body">

                        <div class="form-group has-feedback">
                            <label for="title">Название программы</label>
                            <input type="text" name="title" class="form-control" id="title"
                                   placeholder="Название программы"
                                   value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : null; ?>"
                                   required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="city">Город</label>
                            <input type="text" name="city" class="form-control" id="city" placeholder="Город"
                                   value="<?php isset($_SESSION['form_data']['city']) ? h($_SESSION['form_data']['city']) : null; ?>"
                                   required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="coach">Тренер</label>
                            <input type="text" name="coach" class="form-control" id="coach" placeholder="Тренер"
                                   value="<?php isset($_SESSION['form_data']['coach']) ? h($_SESSION['form_data']['coach']) : null; ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="date_from">Дата начала</label>
                                    <select name="date_from" id="date_from" class="form-control dates_schedule" required>
                                        <option value="">Выберите дату</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="month_from">Месяц начала</label>
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
                                    <select name="date_to" id="date_to" class="form-control dates_schedule" required>
                                        <option value="">Выберите дату</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="month_to">Месяц окончания</label>
                                    <select name="month_to" id="month_to" class="form-control months_schedule" required>
                                        <option value="">Выберите месяц</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="format">Формат обучение</label>
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
                                    <select name="time_from" id="time_from" class="form-control time_schedule" required>
                                        <option value="">Выберите время</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="time_to">Время окончания</label>
                                    <select name="time_to" id="time_to" class="form-control time_schedule" required>
                                        <option value="">Выберите время</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->