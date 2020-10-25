<?php
namespace app\controllers;

use yii\web\Controller;
use Yii;

class FormatterController extends Controller {
    public function actionIndex() {

        $appLang = Yii::$app->language;
        $formatter = Yii::$app->formatter;
        
        echo "<h2>{$appLang}</h2>";

        ?>
        as,dhf
        <?php
        echo "<p>CNPJ: {$formatter->asCnpj(48326869000157)}</p>";
        echo "<p>CPF: {$formatter->asCpf(36125271005)}</p>";
        echo "<p>Cep: {$formatter->asCep(89835000)}</p>";
        echo "<p>Size (arquivo): {$formatter->asShortSize(102400)}</p>";
        echo "<p>Moedas: {$formatter->asCurrency(1200.20)}</p>";
        echo "<p>Data Fomato php: {$formatter->asDate("2020-10-25", 'php:d/M/Y')}</p>";
        echo "<p>Data Fomato: {$formatter->asDate("2020-10-25", 'dd/MM/Y')}</p>";
        echo "<p>Data default: {$formatter->asDate("2020-10-25")}</p>";
        echo "<p>Data: ".$formatter->asDate('2020-10-25', 'full')."</p>";
        echo "<p>Data: ".$formatter->asDate('2020-10-25', 'medium')."</p>";
        echo "<p>Data: ".$formatter->asDate('2020-10-25', 'short')."</p>";
        echo "<p>NText: {$formatter->asNtext("gian\n@gian\n.com")}</p>";
        echo "<p>E-mail: {$formatter->asEmail('gian@gian.com')}</p>";
        echo "<p>Percentuais: {$formatter->asBoolean(true)} ou {$formatter->asBoolean(false)} </p>";
        echo "<p>Percentuais: {$formatter->asPercent(0.5582, 2)}</p>";
        echo 'Formatter';
    }
}