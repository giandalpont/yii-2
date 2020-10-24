<?php

use \yii\widgets\LinkPager;

echo '<h1>Pessoas</h1> <hr />';

foreach ($pessoas as $pessoa) {
    echo $pessoa->firstname.' '.$pessoa->lastname;
    echo '<br />';
    echo $pessoa->email;
    echo '<br />';
    echo '<br />';
    echo '<br />';
    echo '<br />';
}

echo LinkPager::widget(['pagination' => $pagination]);

    
?>