<?php

namespace app\controllers\admin;

use app\models\admin\Card;
use RedBeanPHP\R;

class MainController extends AppController
{

    public function indexAction()
    {
        $countNewRequests = R::count('request');
        $countUsers = R::count('user');
        $countProducts = R::count('product');
        $countCategories = R::count('category');
        $top_card = R::findAll('topcard');
        $this->setMeta('Панель управления');
        $this->set(compact('countNewRequests', 'countCategories', 'countProducts', 'countUsers', 'top_card'));
    }

    public function cardAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $card = new Card();
            $data = $_POST;
            $card->load($data);
            if ($card->update('topcard', $id)) {
                $card = R::load('topcard', $id);
                R::store($card);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect(ADMIN);
            }
        }

        $id = $this->getRequestID();
        $card = R::load('topcard', $id);
        $this->setMeta("Редактирование карточки {$card->title}");
        $this->set(compact('card'));
    }


}