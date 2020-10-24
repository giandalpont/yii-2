<?php
echo '<h2>Você inseriu as seguintes informações no formulário</h2>'
?>

<ul>
    <li><label for="nome">Nome completo: </label> <?=$model->nome?></li>
    <li><label for="email">E-mail: </label> <?=$model->email?></li>
    <li><label for="idade">Idade: </label> <?=$model->idade?></li>
</ul>