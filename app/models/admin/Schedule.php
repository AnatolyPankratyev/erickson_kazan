<?php


namespace app\models\admin;


use app\models\AppModel;

class Schedule extends AppModel
{
    public $attributes = [
        'title' => '',
        'month_from' => '',
        'month_to' => '',
        'city' => '',
        'date_from' => '',
        'date_to' => '',
        'time_from' => '',
        'time_to' => '',
        'format' => '',
        'coach' => '',
    ];
}