<?php
namespace app\controllers;

use yii\base\Controller;
use yii\filters\AccessControl;

use app\components\TempoAcaoFiltro;

class FiltroController extends Controller {
    public function behaviors() {
        return [
            'tempoacao' => [
                'class' => TempoAcaoFiltro::className(),
            ],
            'access' => [
                'class' => AccessControl::className(),
                'except' => ['create'],
                // 'only' => ['create', 'update'],
                'rules' => [
                    ['allow' => false],
                ]
            ]
        ];
    }

    public function actionIndex() {
        return 'Listagem';
    }

    public function actionCreate() {
        return 'Novo';
    }

    public function actionUpdate() {
        return 'Atualizar';
    }
    
    public function actionDelete() {
        return 'Deletar';
    }
}

?>