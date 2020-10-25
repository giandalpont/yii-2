<?php

namespace app\widgets;

use Yii;
use \yii\base\Widget;
use yii\helpers\Html;


class Hello extends Widget {
    public $message;
    public $submessage;

    public function init() {
        parent::init();

        if ($this->message === null) $this->message = 'Hello Widget message!';

        if ($this->submessage == null) $this->submessage = 'Hello Widget submessage!';
    }

    public function run() {
        $output = '<h2>'.Html::encode($this->message).'</h2>';
        $output .= '<h3>'.Html::encode($this->submessage).'</h3>';

        return $output;
    } 
}
?>