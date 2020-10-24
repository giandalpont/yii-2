<?php

namespace app\controllers;

use app\models\Pessoas;
use yii\base\Controller;
use yii\data\Pagination;

class PessoasController extends Controller {
    public function actionPessoas() {
        /* Buscando todos no banco de dados */
        // $pessoas = Pessoas::find()->orderBy('firstname')->all();
        // echo '<pre>';
        // print_r($pessoas);
        // echo '</pre>';
        
        /* Buscando pelo ID */
        // $pessoa = Pessoas::findOne(2);
        // echo $pessoa->firstname.' ' . $pessoa->lastname;
        // echo '<br />';
        // echo $pessoa->email;

        /* Atualizando o firstname */
        // $pessoa->firstname = 'Gian Carlos';
        // $pessoa->save();
        // echo '<br />';
        // echo '<br />';
        // echo '<br />';
        // echo $pessoa->firstname;

        $query = Pessoas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count()
        ]);

        $pessoas = $query->orderBy('firstname')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('pessoas', [
            'pessoas' => $pessoas,
            'pagination' => $pagination,
        ]);
    }
}

?>