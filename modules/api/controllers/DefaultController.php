<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class DefaultController extends ActiveController {

    // Utilizando como base o model notícia
    public $modelClass = 'app\models\Noticia';

    public function actionIndex() {
        return $this->render('index');
    }
}
