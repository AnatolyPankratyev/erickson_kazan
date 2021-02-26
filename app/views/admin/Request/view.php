<!-- Content Header (Page header) -->
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/request">Список заявок</a></li>
        <li class="active">Заявка №<?=$request['id'];?></li>
    </ol>
</section>
<!-- Main content -->
<section class="content" style="margin-top: 3em">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Номер заказа</td>
                                <td><?=$request['id'];?></td>
                            </tr>
                            <tr>
                                <td>Имя заказчика</td>
                                <td><?=$request['name'];?></td>
                            </tr>
                            <tr>
                                <td>Телефон заказчика</td>
                                <td><?=$request['tel'];?></td>
                            </tr>
                            <tr>
                                <td>Email заказчика</td>
                                <td><?=$request['email'];?></td>
                            </tr>
                            <tr>
                                <td>Сообщение заказчика</td>
                                <td><?=$request['message'];?></td>
                            </tr>
                            <tr>
                                <td>Бонус 1</td>
                                <?php if ($request['bonus1']): ?>
                                <td>Заказан</td>
                                <?php else: ?>
                                <td>Не заказан</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Бонус 2</td>
                                <?php if ($request['bonus2']): ?>
                                    <td>Заказан</td>
                                <?php else: ?>
                                    <td>Не заказан</td>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td>Бонус 3</td>
                                <?php if ($request['bonus3']): ?>
                                    <td>Заказан</td>
                                <?php else: ?>
                                    <td>Не заказан</td>
                                <?php endif; ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->