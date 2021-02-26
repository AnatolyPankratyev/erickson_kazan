<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование отзыва <?=$product->autor;?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/feedback/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="autor">Автор отзыва</label>
                            <input type="text" name="autor" class="form-control" id="autor" placeholder="Автор отзыва" value="<?=h($product->autor);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="content">Текст отзыва</label>
                            <textarea name="text" id="editor1" cols="80" rows="10"><?=$product->text;?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="feedback/add-image" data-name="single">Выбрать файл</div>
                                        <div class="single">
                                            <img src="/img/graduate/<?=$product->img;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$product->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->