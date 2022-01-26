<?php

use yii\bootstrap4\Html;
$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table26-create">

    <?= $form->field($model, 'field26', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    )?>
    <table class="table table-bordered table-sm table26">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>26.1</td>
            <td>один
            </td>
            <td><?= $form->field($model, 'field26_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>26.2</td>
            <td>два
            </td>
            <td><?= $form->field($model, 'field26_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>26.3</td>
            <td>три
            </td>
            <td><?= $form->field($model, 'field26_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>26.4</td>
            <td>четыре
            </td>
            <td><?= $form->field($model, 'field26_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>26.5</td>
            <td>Пять и более раз
            </td>
            <td><?= $form->field($model, 'field26_5')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
