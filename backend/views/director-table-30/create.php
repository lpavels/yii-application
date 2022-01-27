<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable30 */

?>
<div class="director-table30-create">

    <h6>30. Стоимость школьного питания по основному меню (руб/чел/день)</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Приемы пищи</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>

        </tr>
        <tr>
            <td>30.1</td>
            <td>Завтрак</td>
            <td><?= $form->field($model, 'field30_1')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field30_2')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field30_3')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>30.1.1</td>
            <td>Обед</td>
            <td><?= $form->field($model, 'field30_5')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field30_6')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field30_7')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>30.1.2</td>
            <td>Полдник </td>
            <td><?= $form->field($model, 'field30_9')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field30_10')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field30_11')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
