<?php

namespace app\components;
use yii\base\ActionFilter;

class TempoAcaoFiltro extends ActionFilter {

    private $start;
    public $message = 'Sua action demorou: ';

    public function beforeAction($action) {
        $this->start = microtime(true);
        return parent::beforeAction($action);
    }

    public function afterAction($action, $result) {
        $time = microtime(true) - $this->start;
        echo '<p>'.$this->message.$time.'</p>';

        return parent::afterAction($action, $result);
    }
}

?>