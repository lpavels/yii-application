<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable4 */

?>
<div class="director-table9-create">

    <h6>9.	Количество детей, охваченных организованным питанием, из числа обучающихся в третью смену </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>9.1.</td>
            <td>Охвачены одноразовым горячим организованным питанием  </td>
            <td><?= $form->field($model, 'field9_1')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_2')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_3')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>9.1.1.</td>
            <td>В т.ч. - горячие завтраки </td>
            <td><?= $form->field($model, 'field9_5')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_6')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_7')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>9.1.2.</td>
            <td>Обеды </td>
            <td><?= $form->field($model, 'field9_9')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_10')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_11')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>9.2.</td>
            <td>Охвачены двухразовым питанием  </td>
            <td><?= $form->field($model, 'field9_13')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_14')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_15')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>9.3.</td>
            <td>Охвачены трехразовым питанием </td>
            <td><?= $form->field($model, 'field9_17')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_18')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_19')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>9.4.</td>
            <td>Охвачено организованным питанием всего  </td>
            <td><?= $form->field($model, 'field9_21')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_22')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field9_23')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
    </table>

</div>
