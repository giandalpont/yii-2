<?php
namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller {
    public function actionHelloView($message = 'Hello') {
        return $this->render('hello-view', [
            'message' => $message
        ]);
    }
}

?>