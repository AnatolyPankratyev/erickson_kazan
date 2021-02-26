<?php


namespace app\controllers;


use RedBeanPHP\R;

class GalleryController extends AppController
{
    private $desc = 'Erickson Coaching. Коучинг Казань. Эриксон коучинг';
    private $keywords = 'Erickson Coaching. Коучинг Казань. Эриксон коучинг. Коучинг';
    private $title_begin = 'Erickson Coaching - ';

    public function indexAction() {
        $page_title = $this->title_begin . 'Галлерея';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function photosAction() {
        $cat_photos = R::findAll('cat_photos');
        $this->set(compact('cat_photos'));
        $page_title = $this->title_begin . 'Галлерея | Фото';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function feedbacksAction() {
        $cat_feedbacks = R::findAll('cat_feedbacks');
        $this->set(compact('cat_feedbacks'));
        $page_title = $this->title_begin . 'Галлерея | Отзывы';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function videosAction() {
        $cat_videos = R::findAll('cat_videos');
        $this->set(compact('cat_videos'));
        $page_title = $this->title_begin . 'Галлерея | Видео';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }
}