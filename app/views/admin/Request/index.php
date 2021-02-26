<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список заказов
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список заказов</li>
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
                                <th>ID</th>
                                <th>Пользователь</th>
                                <th>Телефон</th>
                                <th>Email</th>
                                <th>Подробнее</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($requests as $request): ?>
                                <tr class="<?=$class;?>">
                                    <td><?=$request['id'];?></td>
                                    <td><?=$request['name'];?></td>
                                    <td><?=$request['tel'];?></td>
                                    <td><?=$request['email'];?></td>
                                    <td><a href="<?=ADMIN;?>/request/view?id=<?=$request['id'];?>"><i class="fa fa-fw fa-eye"></i></a></td>
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