<?php


namespace app\controllers;


use RedBeanPHP\R;

class FeedbacksController extends AppController
{
    public function viewAction() {
        $alias = $this->route['alias'];
        $cat_feedbacks = R::findOne('cat_feedbacks', 'alias = ?', [$alias]);
        if(!$cat_feedbacks){
            throw new \Exception('Страница не найдена', 404);
        }
        $feedbacks = R::find('feedbacks', "cat_id = '$cat_feedbacks->id'");
        $this->set(compact('cat_feedbacks', 'feedbacks'));
    }
}