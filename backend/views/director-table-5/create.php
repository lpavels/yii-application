<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable5 */

?>
<div class="director-table5-create">

    <h6>5. Количество детей, посещающих группу продленного дня, обучающихся на подвозе </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>5.1.</td>
            <td>Количество детей, посещающих группу продленного дня</td>
            <td><?= $form->field($model, 'field5_1')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field5_2')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field5_3')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>5.2.</td>
            <td>Количество детей, обучающихся на подвозе</td>
            <td><?= $form->field($model, 'field5_5')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field5_6')->textInput(['type' => 'number'])->label(false)?></td>
            <td><?= $form->field($model, 'field5_7')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
    </table>

</div>
