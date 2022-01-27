<?php

use yii\bootstrap4\Html;
$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table24-create">

    <?= $form->field($model, 'field21_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>

    <?= $form->field($model, 'field22_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>

    <?= $form->field($model, 'field23_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>

    <?= $form->field($model, 'field24_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table24">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>24.1</td>
            <td>Овощные блюда (не включая картофельные) используются в 2-х и более приемах пищи ежедневно (овощные супы,
                салаты, гарниры и др.)
            </td>
            <td><?= $form->field($model, 'field24_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>24.2</td>
            <td>Фрукты ежедневно присутствуют в рационе питания членов семьи в количестве не менее 250-300 г. (средний вес
                яблока, груши, апельсина – 120-130 г)
            </td>
            <td><?= $form->field($model, 'field24_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>24.3</td>
            <td>При выборе хлеба и хлебобулочных изделий, отдается приоритет продуктам из муки грубого помола, с
                присутствием цельных злаков, отрубей
            </td>
            <td><?= $form->field($model, 'field24_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>24.4</td>
            <td>Блюда из рыбы присутствуют в рационе еженедельно</td>
            <td><?= $form->field($model, 'field24_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>24.5</td>
            <td>Ежедневно в питании используются 2-3 молочных продукта (включая молочные блюда и напитки)</td>
            <td><?= $form->field($model, 'field24_6')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
