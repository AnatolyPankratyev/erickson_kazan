<?php


namespace app\controllers;


use RedBeanPHP\R;

class PhotosController extends AppController
{
    public function viewAction() {
        $alias = $this->route['alias'];
        $cat_photos = R::findOne('cat_photos', 'alias = ?', [$alias]);
        if(!$cat_photos){
            throw new \Exception('Страница не найдена', 404);
        }
        $photos = R::find('photos', "cat_id = '$cat_photos->id'");
        $this->set(compact('cat_photos', 'photos'));
    }
}