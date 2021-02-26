<?php


namespace app\controllers\admin;


use app\models\admin\Schedule;
use RedBeanPHP\R;

class ScheduleController extends AppController
{
    public function indexAction()
    {
        $schedule = R::findAll('schedule');
        $this->set(compact('schedule'));
        $this->setMeta('Расписание');
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $schedule = new Schedule();
            $data = $_POST;
            $schedule->load($data);
            if ($schedule->update('schedule', $id)) {
                $schedule = R::load('schedule', $id);
                R::store($schedule);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect(ADMIN . '/schedule');
            }
        }

        $months = [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь',
        ];

        $id = $this->getRequestID();
        $schedule = R::load('schedule', $id);
        $this->setMeta("Редактирование расписания {$schedule->title}");
        $this->set(compact('schedule', 'months'));
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $schedule = new Schedule();
            $data = $_POST;
            $schedule->load($data);

            if (!$schedule->validate($data)) {
                $schedule->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if ($id = $schedule->save('schedule')) {
                $_SESSION['success'] = 'Рассписание обновлено';
            }
            redirect(ADMIN . '/feedback');
        }
        $this->setMeta('Добавление (расписание) ');
    }

    public function deleteAction(){
        $schedule_id = $this->getRequestID();
        $schedule = R::load('schedule', $schedule_id);
        R::trash($schedule);
        $_SESSION['success'] = 'Блок расписания удален';
        redirect(ADMIN . '/schedule');
    }
}