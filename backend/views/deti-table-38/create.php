<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table38-create">

    <?= $form->field($model, 'field38_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table38">
        <tr>
            <td>№</td>
            <td>Как ребенок принимает витаминно-минеральные комплексы</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>38.1</td>
            <td>постоянно
            </td>
            <td><?= $form->field($model, 'field38_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>38.2</td>
            <td>2-3 раза в полгода курсами
            </td>
            <td><?= $form->field($model, 'field38_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>38.3</td>
            <td>1-2 раза в год курсами.
            </td>
            <td><?= $form->field($model, 'field38_4')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
