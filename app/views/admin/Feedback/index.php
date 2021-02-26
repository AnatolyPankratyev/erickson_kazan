<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список отзывов <a class="btn btn-success" href="<?= ADMIN; ?>/feedback/add">Добавить новый</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= ADMIN; ?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список отзывов</li>
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
                                <th>Автор</th>
                                <th>Текст</th>
                                <th>Фото</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($feedbacks as $feedback): ?>
                                <tr>
                                    <td><?= $feedback['autor']; ?></td>
                                    <td><?= $feedback['text']; ?></td>
                                    <td><?= $feedback['img']; ?></td>
                                    <td>
                                        <a href="<?= ADMIN; ?>/feedback/edit?id=<?= $feedback['id']; ?>">
                                            <i class="fa fa-fw fa-eye"></i>
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