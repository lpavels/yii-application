<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table43-create">

    <?= $form->field($model, 'field41', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <?= $form->field($model, 'field42', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <?= $form->field($model, 'field43', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table43">
        <tr>
            <td>№</td>
            <td>Оцените уровень двигательной активности ребенка</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>43.1</td>
            <td>Фаст-фуд
            </td>
            <td><?= $form->field($model, 'field43_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.2</td>
            <td>Чипсы
            </td>
            <td><?= $form->field($model, 'field43_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.3</td>
            <td>Шоколад, конфеты
            </td>
            <td><?= $form->field($model, 'field43_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.4</td>
            <td>Пирожные
            </td>
            <td><?= $form->field($model, 'field43_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.5</td>
            <td>Булочки, пироги
            </td>
            <td><?= $form->field($model, 'field43_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.6</td>
            <td>Пряники, печенье
            </td>
            <td><?= $form->field($model, 'field43_6')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.7</td>
            <td>Зефир, мармелад
            </td>
            <td><?= $form->field($model, 'field43_7')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.8</td>
            <td>Мороженое
            </td>
            <td><?= $form->field($model, 'field43_8')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.9</td>
            <td>Соки, нектары
            </td>
            <td><?= $form->field($model, 'field43_9')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.10</td>
            <td>Вода питьевая бутилированная
            </td>
            <td><?= $form->field($model, 'field43_10')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>43.11</td>
            <td>Сладкие газированные напитки
            </td>
            <td><?= $form->field($model, 'field43_11')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
