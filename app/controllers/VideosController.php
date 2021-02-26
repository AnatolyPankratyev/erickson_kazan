<?php


namespace app\controllers;


use RedBeanPHP\R;

class VideosController extends AppController
{
    public function viewAction() {
        $alias = $this->route['alias'];
        $cat_videos = R::findOne('cat_videos', 'alias = ?', [$alias]);
        if(!$cat_videos){
            throw new \Exception('Страница не найдена', 404);
        }
        $videos = R::find('videos', "cat_id = '$cat_videos->id'");
        $this->set(compact('cat_videos', 'videos'));
    }
}