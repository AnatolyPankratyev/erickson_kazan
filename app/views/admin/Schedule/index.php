<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список отзывов <a class="btn btn-success" href="<?= ADMIN; ?>/schedule/add">Добавить</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Распиание</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Даты</th>
                                <th>Город</th>
                                <th>Время</th>
                                <th>Формат</th>
                                <th>Тренер</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($schedule as $item): ?>
                                <tr>
                                    <td><?= $item['title']; ?></td>
                                    <td>
                                        <?= $item['date_from']; ?>.<?= $item['month_from']; ?> - <?= $item['date_to']; ?>.<?= $item['month_to']; ?>
                                    </td>
                                    <td><?= $item['city']; ?></td>
                                    <td>
                                        <?= $item['time_from']; ?> - <?= $item['time_to']; ?>
                                    </td>
                                    <td>
                                        <?php if ( $item['format'] == 1 ):?>
                                        Очно
                                        <?php else:?>
                                        Онлайн
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $item['coach']; ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" href="<?= ADMIN; ?>/schedule/edit?id=<?= $item['id']; ?>">
                                            редактировать
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-danger" href="<?= ADMIN; ?>/schedule/delete?id=<?= $item['id']; ?>">
                                            удалить
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->