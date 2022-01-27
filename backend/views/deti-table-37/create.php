<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table37-create">

    <?= $form->field($model, 'field34', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <?= $form->field($model, 'field35', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    )?>
    <?= $form->field($model, 'field36', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <?= $form->field($model, 'field37', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table37">
        <tr>
            <td>№</td>
            <td>Что не нравится в школьной столовой</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>37.1</td>
            <td>грязно
            </td>
            <td><?= $form->field($model, 'field37_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.2</td>
            <td>много детей и мало места
            </td>
            <td><?= $form->field($model, 'field37_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.3</td>
            <td>приходится долго ждать чтобы получить еду
            </td>
            <td><?= $form->field($model, 'field37_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.4</td>
            <td>еда часто бывает остывшей
            </td>
            <td><?= $form->field($model, 'field37_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.5</td>
            <td>еда не вкусная
            </td>
            <td><?= $form->field($model, 'field37_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.6</td>
            <td>не нравится сервировка столов
            </td>
            <td><?= $form->field($model, 'field37_6')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.7</td>
            <td>в столовой часто неприятно пахнет
            </td>
            <td><?= $form->field($model, 'field37_7')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.8</td>
            <td>не хватает времени
            </td>
            <td><?= $form->field($model, 'field37_8')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>37.9</td>
            <td>не хватает посуды
            </td>
            <td><?= $form->field($model, 'field37_9')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>
</div>
