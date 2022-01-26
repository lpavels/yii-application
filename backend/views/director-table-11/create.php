<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable4 */

?>
<div class="director-table11-create">

    <h6>11.	Количество детей с заболеваниями, требующими индивидуального подхода в организации питания: </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td></td>
            <td>Количество детей</td>
            <td>ВСЕГО</td>
        </tr>
        <tr>
            <td>11.1.</td>
            <td>САХАРНЫЙ ДИАБЕТ</td>
            <td><?= $form->field($model, 'field11_1')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>11.2.</td>
            <td>ПИЩЕВАЯ АЛЛЕРГИЯ </td>
            <td><?= $form->field($model, 'field11_2')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>11.3.</td>
            <td>ЦЕЛИАКИЯ </td>
            <td><?= $form->field($model, 'field11_3')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>11.4.</td>
            <td>ФЕНИЛКЕТОНУРИЯ </td>
            <td><?= $form->field($model, 'field11_4')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>11.5.</td>
            <td>МУКОВИСЦИДОЗ </td>
            <td><?= $form->field($model, 'field11_5')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
        <tr>
            <td>11.6.</td>
            <td>ОВЗ (ограниченные возможности детей)</td>
            <td><?= $form->field($model, 'field11_6')->textInput(['type' => 'number'])->label(false)?></td>
        </tr>
    </table>

</div>
