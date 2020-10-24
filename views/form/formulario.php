<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


echo '<h1>Formulário de cadastro';
echo '<hr />';

$form = ActiveForm::begin();
    echo $form->field($model, 'nome')->textInput(['autofocus' => true]);
    echo $form->field($model, 'email');
    echo $form->field($model, 'idade');

    echo '<div class="form-group">';
    echo Html::submitButton('Cadastrar', ['class'=>'btn btn-primary']);
    echo '</div>';
ActiveForm::end();



