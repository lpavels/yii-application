<?php

use yii\helpers\Html;

?>
<div class="director-table7-create">

    <h6>7. Количество детей, охваченных организованным питанием, из числа обучающихся в первую смену </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>7.1.</td>
            <td>Охвачены одноразовым горячим организованным питанием </td>
            <td><?= $form->field($model, 'field7_1')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_2')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_3')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>7.1.1.</td>
            <td>В т.ч. - горячие завтраки </td>
            <td><?= $form->field($model, 'field7_5')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_6')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_7')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>7.1.2.</td>
            <td>Обеды </td>
            <td><?= $form->field($model, 'field7_9')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_10')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_11')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>7.2.</td>
            <td>Охвачены двухразовым питанием  </td>
            <td><?= $form->field($model, 'field7_13')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_14')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_15')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>7.3.</td>
            <td>Охвачены трехразовым питанием </td>
            <td><?= $form->field($model, 'field7_17')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_18')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_19')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>7.4.</td>
            <td>Охвачено организованным питанием всего  </td>
            <td><?= $form->field($model, 'field7_21')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_22')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field7_23')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
    </table>


</div>
