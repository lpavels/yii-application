<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable29 */
?>
<div class="director-table29-create">

    <h6>29.	В реализации каких образовательных программах по здоровому питанию принимает участие общеобразовательная организация </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td rowspan="2">№</td>
            <td rowspan="2">Форма организации питьевого режима</td>
            <td colspan="3">Вовлекаемые в программу контингенты</td>
        </tr>
        <tr>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>

        </tr>
        <tr>
            <td>29.1</td>
            <td>«Основы здорового питания» для детей школьного возраста (Роспотребнадзор)</td>
            <td><?= $form->field($model, 'field29_1')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_2')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_3')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>29.1.1</td>
            <td>«Школьное молоко»</td>
            <td><?= $form->field($model, 'field29_5')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_6')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_7')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>29.1.2</td>
            <td>«Разговор о правильном питании»</td>
            <td><?= $form->field($model, 'field29_9')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_10')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_11')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>29.1.3</td>
            <td>Образовательные программы по здоровому питанию не реализуются</td>
            <td><?= $form->field($model, 'field29_13')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_14')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field29_15')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
    </table>


</div>
