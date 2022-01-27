<?php

use yii\bootstrap4\Html;
$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table28-create">

    <?= $form->field($model, 'field27_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <?= $form->field($model, 'field28', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table28">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>28.1</td>
            <td>один
            </td>
            <td><?= $form->field($model, 'field28_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>28.2</td>
            <td>два
            </td>
            <td><?= $form->field($model, 'field28_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>28.3</td>
            <td>три
            </td>
            <td><?= $form->field($model, 'field28_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>28.4</td>
            <td>четыре
            </td>
            <td><?= $form->field($model, 'field28_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>28.5</td>
            <td>Пять и более раз
            </td>
            <td><?= $form->field($model, 'field28_5')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
