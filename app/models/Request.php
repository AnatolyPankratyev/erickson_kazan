<?php


namespace app\models;

use ishop\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;


class Request extends AppModel
{
    public $attributes = [
        'name' => '',
        'tel' => '',
        'email' => '',
        'message' => '',
        'bonus1' => '',
        'bonus2' => '',
        'bonus3' => '',
        'from_page' => '',
    ];

    public static function saveRequest($request) {
        $data = $_POST;
        $request->load($data);
        if ( isset($_POST['bonus1']) == true ) {
            $request->attributes['bonus1'] = 1;
        } else {
            $request->attributes['bonus1'] = 0;
        }
        if ( isset($_POST['bonus2']) == true ) {
            $request->attributes['bonus2'] = 1;
        } else {
            $request->attributes['bonus2'] = 0;
        }
        if ( isset($_POST['bonus3']) == true ) {
            $request->attributes['bonus3'] = 1;
        } else {
            $request->attributes['bonus3'] = 0;
        }
        if($request->save('request')){
            $_SESSION['success'] = 'Ваша заявка успешно зарегистрирована';
        }else{
            $_SESSION['error'] = 'Ошибка!';
        }
    }

    public static function mailRequest($user_email) {
        // Create the Transport
        $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
            ->setUsername(App::$app->getProperty('smtp_login'))
            ->setPassword(App::$app->getProperty('smtp_password'));

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        ob_start();
        require APP . '/views/mail/mail_client.php';
        $body_client = ob_get_clean();

        $message_client = (new Swift_Message("Вы оставили заявку на сайте " . App::$app->getProperty('shop_name')))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
            ->setTo($user_email)
            ->setBody($body_client, 'text/html');
        $result = $mailer->send($message_client);

        ob_start();
        require APP . '/views/mail/mail_admin.php';
        $body_admin = ob_get_clean();
        $message_admin = (new Swift_Message("Заявка"))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
            ->setTo(App::$app->getProperty('admin_email'))
            ->setBody($body_admin, 'text/html');
        $result = $mailer->send($message_admin);
        redirect(PATH . '/main/thanks');

    }
}