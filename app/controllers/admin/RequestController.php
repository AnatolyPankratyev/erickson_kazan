<?php


namespace app\controllers\admin;


use RedBeanPHP\R;
use ishop\libs\Pagination;

class RequestController extends AppController
{

    public function indexAction() {

        $requests = R::findAll('request');
        $countNewRequests = R::count('request');

        $this->set(compact('requests', 'countNewRequests'));
    }

    public function viewAction() {
        $request_id = $this->getRequestID();
        $request = \R::getRow("SELECT `request`.* FROM `request` WHERE `request`.`id` = ?", [$request_id]);
        if(!$request){
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta("Заказ №{$request_id}");
        $this->set(compact('request', 'request_id'));
    }

}