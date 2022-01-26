<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table44-create">
    <h6>42.	Оценка ребенком организации питания в общеобразовательной организации и дома:</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Оценка питания</td>
            <td>В школе</td>
            <td>дома</td>
        </tr>
        <tr>
            <td>44.1</td>
            <td>отлично
            </td>
            <td><?= $form->field($model, 'field44_1')->dropdownList($items)->label(false) ?></td>
            <td><?= $form->field($model, 'field44_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>44.2</td>
            <td>хорошо
            </td>
            <td><?= $form->field($model, 'field44_3')->dropdownList($items)->label(false) ?></td>
            <td><?= $form->field($model, 'field44_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>44.3</td>
            <td>удовлетворительно
            </td>
            <td><?= $form->field($model, 'field44_5')->dropdownList($items)->label(false) ?></td>
            <td><?= $form->field($model, 'field44_6')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>44.4</td>
            <td>не удовлетворительно
            </td>
            <td><?= $form->field($model, 'field44_7')->dropdownList($items)->label(false) ?></td>
            <td><?= $form->field($model, 'field44_8')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>
    <?= $form->field($model, 'field45', Yii::$app->myComponent->twoColumnNameSm(''))->textarea(
        Yii::$app->myComponent->twoColumnInputSm()
    )?>

    <?= $form->field($model, 'field46', Yii::$app->myComponent->twoColumnNameSm(''))->textarea(
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>

</div>
