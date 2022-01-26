<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table32-create">

    <?= $form->field($model, 'field31', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    )?>
    <?= $form->field($model, 'field32_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table32">
        <tr>
            <td>№</td>
            <td>Какую продукцию предпочитает приобретать ребенок в вендинговом аппарате?</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>32.1</td>
            <td>Соки
            </td>
            <td><?= $form->field($model, 'field32_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.2</td>
            <td>Молоко и кисломолочная продукция
            </td>
            <td><?= $form->field($model, 'field32_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.3</td>
            <td>Кондитерские изделия промышленного изготовления, включая шоколад, печенье, вафли и пряники
            </td>
            <td><?= $form->field($model, 'field32_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.4</td>
            <td>Фруктово-злаковые батончики
            </td>
            <td><?= $form->field($model, 'field32_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.5</td>
            <td>Иная продукция
            </td>
            <td><?= $form->field($model, 'field32_6')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
