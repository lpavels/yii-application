<?php

use yii\bootstrap4\Html;
$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table25-create">

    <?= $form->field($model, 'field25', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table25">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>25.1</td>
            <td>От медицинских работников
            </td>
            <td><?= $form->field($model, 'field25_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>25.2</td>
            <td>Телевидение
            </td>
            <td><?= $form->field($model, 'field25_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>25.3</td>
            <td>Интернет-ресурсы
            </td>
            <td><?= $form->field($model, 'field25_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>25.4</td>
            <td>Печатные издания
            </td>
            <td><?= $form->field($model, 'field25_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>25.5</td>
            <td>Родственники, знакомые
            </td>
            <td><?= $form->field($model, 'field25_5')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
