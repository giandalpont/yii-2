<?php
echo '<h1>Controller Hello</h1>';

// ?r=hello/hello-view&message=Valor 45

// Formato vulnerável
echo '<h3>O valor da variável $message é '.$message.'</h3>';

// Formato correto
echo '<h3>O valor da variável $message é '. \yii\helpers\Html::encode($message).'</h3>';
