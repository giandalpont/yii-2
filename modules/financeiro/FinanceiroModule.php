<?php

namespace app\modules\financeiro;

use yii\base\Module;
use Yii;

class FinanceiroModule extends Module {
    // public $layout ='main';

    public function init() {
        $this->layout = 'main';

        parent::init();

        // Yii::configure($this, require(__DIR__.'config/main.php'));

        $this->params['nome'] = 'Gian';
        $this->params['sobrenome'] = 'Dal Pont';
    }  
}

?>