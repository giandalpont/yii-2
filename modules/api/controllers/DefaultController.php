<?php

namespace app\modules\api\controllers;

use yii\rest\ActiveController;

class DefaultController extends ActiveController {

    // Utilizando como base o model notícia
    public $modelClass = 'app\models\Noticia';

    // Removendo ação delete e update na API
    public function actions() {
        $actions = parent::actions();

        unset($actions['delete'],$actions['create']);

        return $actions;
    }

    public function actionIndex() {
        return $this->render('index');
    }
}
