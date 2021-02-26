<?php

namespace app\controllers;

use app\models\Request;
use app\models\RequestProgram;
use RedBeanPHP\R;

class MainController extends AppController {

    private $desc = 'Erickson Coaching. Коучинг Казань. Эриксон коучинг';
    private $keywords = 'Erickson Coaching. Коучинг Казань. Эриксон коучинг. Коучинг';
    private $title_begin = 'Erickson Coaching - ';

    public function indexAction(){
        $page_title = $this->title_begin . 'Главная страница';
        $carousels = R::findAll('main_carousel');
        $top_card = R::findAll('topcard');
        $feedbacks = R::findAll('otzyv');
        $this->set(compact('carousels', 'top_card', 'feedbacks'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function aboutAction() {
        $page_title = $this->title_begin . 'О коучинге';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function forBusinessAction() {
        $page_title = $this->title_begin . 'Для бизнеса';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function scienceAndArtAction() {
        $page_title = $this->title_begin . 'Наука и исскуство';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function managementCoachingAction() {
        $page_title = $this->title_begin . 'Управленческий коучинг';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function basicCourseAction() {
        $page_title = $this->title_begin . 'Базовый курс';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function teamCoachingAction() {
        $page_title = $this->title_begin . 'Командный коучинг';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function parentAsCoachAction() {
        $page_title = $this->title_begin . 'Родитель как коуч';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function mentoringAction() {
        $page_title = $this->title_begin . 'Менторинг';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function allProgramsAction() {
        $page_title = $this->title_begin . 'Все программы';
        $programs = R::findAll('main_carousel');
        $this->set(compact('programs'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function contactsAction() {
        $page_title = $this->title_begin . 'Контакты';
        $persons = R::findAll('persons');
        $this->set(compact('persons'));
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function enneagramAction () {
        $page_title = $this->title_begin . 'Эннеаграмма';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function kvantUmAction () {
        $page_title = $this->title_begin . 'Квантовый ум';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function scheduleAction() {
        $months = [
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря',
        ];
        $schedule = R::findAll('schedule');
        $this->set(compact('schedule', 'months'));
        $page_title = $this->title_begin . 'Расписание';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function sendAction() {
        if(!empty($_POST)){
            $request = new Request();
            $request->attributes['from_page'] = 'С главной страницы';
            Request::saveRequest($request);
            $user_email = $_POST['email'];
            Request::mailRequest($user_email);
        }
        $this->setMeta('Отправка заявки');
    }

    public function thanksAction() {
        $page_title = $this->title_begin . 'Спасибо за заявку';
        $this->setMeta($page_title, $this->desc, $this->keywords);
    }

    public function sendProgramAction() {
        if(!empty($_POST)) {
            $request = new RequestProgram();
            RequestProgram::saveRequest($request);
            RequestProgram::mailRequest();
        }
        $this->setMeta('Отправка заявки');
    }
}