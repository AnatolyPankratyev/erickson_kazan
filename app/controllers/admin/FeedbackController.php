<?php


namespace app\controllers\admin;


use app\models\admin\Feedback;
use RedBeanPHP\R;

class FeedbackController extends AppController
{
    function indexAction()
    {
        $feedbacks = R::findAll('otzyv');
        $this->set(compact('feedbacks'));
        $this->setMeta('Отзывы');
    }

    public function addAction()
    {
        if (!empty($_POST)) {
            $feedback = new Feedback();
            $data = $_POST;
            $feedback->load($data);

            $feedback->getImg();

            if (!$feedback->validate($data)) {
                $feedback->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if ($id = $feedback->save('otzyv')) {
                $_SESSION['success'] = 'Отзыв добавлен';
            }
            redirect();
        }
        $this->setMeta('Отзывы');
    }

    public function deleteAction(){
        $feedback_id = $this->getRequestID();
        $feedback = R::load('otzyv', $feedback_id);
        R::trash($feedback);
        $_SESSION['success'] = 'Отзыв удален';
        redirect(ADMIN . '/feedback');
    }

    public function editAction()
    {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $product = new Feedback();
            $data = $_POST;
            $product->load($data);
            $product->getImg();
            if ($product->update('otzyv', $id)) {
                $product = R::load('otzyv', $id);
                R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = R::load('otzyv', $id);
        $this->setMeta("Редактирование отзыва {$product->title}");
        $this->set(compact('product'));
    }

    public function addImageAction()
    {
        if (isset($_GET['upload'])) {
            if ($_POST['name'] == 'single') {
                $wmax = 1000;
                $hmax = 1000;
            }
            $name = $_POST['name'];
            $feedback = new Feedback();
            $feedback->uploadImg($name, $wmax, $hmax);
        }
    }

}