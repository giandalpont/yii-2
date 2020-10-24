<?php

namespace app\controllers;

use Yii;
use app\models\CadastroModel;
use yii\base\Controller;

class FormController extends Controller {
    public function actionFormulario() {
        $cadastroModel = new CadastroModel;

        $post = Yii::$app->request->post();

        // se for populado corretamente e se for valido
        if ($cadastroModel->load($post) && $cadastroModel->validate()) {
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
        }

        return $this->render(
            'formulario',
            ['model' => $cadastroModel]
        );
    }
}
?>
