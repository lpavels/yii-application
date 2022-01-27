<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable14 */

?>
<div class="director-table14-create">

    <h6>14.	Количество детей, с ЦЕЛИАКИЕЙ, требующими индивидуального подхода в организации питания.</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Количество детей с</td>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>14.1.</td>
            <td>ЦЕЛИАКИЕЙ </td>
            <td><?= $form->field($model, 'field14_1')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_2')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_3')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>14.1.1</td>
            <td>Из них, находится на домашнем обучении </td>
            <td><?= $form->field($model, 'field14_5')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_6')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_7')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>14.1.2</td>
            <td>Обучается очно </td>
            <td><?= $form->field($model, 'field14_9')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_10')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_11')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>14.1.2.1</td>
            <td>Питается в школе организованно</td>
            <td><?= $form->field($model, 'field14_13')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_14')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_15')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>14.1.2.2</td>
            <td>Питается в школе принесённой из дома едой</td>
            <td><?= $form->field($model, 'field14_17')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_18')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_19')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>14.1.2.3</td>
            <td>Не питается в школе</td>
            <td><?= $form->field($model, 'field14_21')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_22')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field14_23')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
    </table>
</div>
