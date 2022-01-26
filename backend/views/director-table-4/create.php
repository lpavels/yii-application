<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable4 */

?>
<div class="director-table4-create">
    <?= $form->field($model, 'field3', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(Yii::$app->myComponent->twoColumnInputSm())?>
    <h6>4. Количество детей обучающихся в школе. </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>4.1.</td>
            <td>Обучается очно (всего)</td>
            <td><?= $form->field($model, 'field4_1')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_2')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_3')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>4.1.1.</td>
            <td>В т.ч. в первую смену</td>
            <td><?= $form->field($model, 'field4_5')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_6')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_7')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>4.1.2.</td>
            <td>Во вторую смену</td>
            <td><?= $form->field($model, 'field4_9')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_10')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_11')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>4.1.3.</td>
            <td>В третью смену</td>
            <td><?= $form->field($model, 'field4_13')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_14')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_15')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>4.2.</td>
            <td>Обучается на дому (всего) </td>
            <td><?= $form->field($model, 'field4_17')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_18')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_19')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>4.3.</td>
            <td>Всего обучающихся </td>
            <td><?= $form->field($model, 'field4_21')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_22')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field4_23')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
    </table>
</div>
