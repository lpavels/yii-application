<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable4 */

?>
<div class="director-table8-create">

    <h6>8.	Количество детей, охваченных организованным питанием, из числа обучающихся во вторую смену </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>8.1.</td>
            <td>Охвачены одноразовым горячим организованным питанием  </td>
            <td><?= $form->field($model, 'field8_1')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_2')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_3')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>8.1.1.</td>
            <td>В т.ч. - горячие завтраки </td>
            <td><?= $form->field($model, 'field8_5')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_6')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_7')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>8.1.2.</td>
            <td>Обеды </td>
            <td><?= $form->field($model, 'field8_9')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_10')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_11')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>8.2.</td>
            <td>Охвачены двухразовым питанием  </td>
            <td><?= $form->field($model, 'field8_13')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_14')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_15')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>8.3.</td>
            <td>Охвачены трехразовым питанием </td>
            <td><?= $form->field($model, 'field8_17')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_18')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_19')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>8.4.</td>
            <td>Охвачено организованным питанием всего  </td>
            <td><?= $form->field($model, 'field8_21')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_22')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field8_23')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
    </table>

</div>
