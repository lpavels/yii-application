<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable33 */

?>
<div class="director-table33-create">

    <h6>33.	Оценка организации питания в общеобразовательной организации:</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Группа блюд или группа продуктов</td>
            <td>Завтраки</td>
            <td>обеды</td>
            <td>дополнительное питание</td>
            <td>Питание детей с заболеваниями, требующими индивидуального подхода</td>
        </tr>
        <tr>
            <td>33.1</td>
            <td>отлично</td>
            <td><?= $form->field($model, 'field33_1')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_2')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_3')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_4')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>33.2</td>
            <td>хорошо</td>
            <td><?= $form->field($model, 'field33_5')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_6')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_7')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_8')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>33.3</td>
            <td>удовлетворительно</td>
            <td><?= $form->field($model, 'field33_9')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_10')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_11')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_12')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>33.4</td>
            <td>не удовлетворительно</td>
            <td><?= $form->field($model, 'field33_13')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_14')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_15')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field33_16')->textInput(['type' => 'number', 'min' => '0', 'max' => '1'])->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
