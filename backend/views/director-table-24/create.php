<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable24 */

?>
<div class="director-table24-create">
    <?= $form->field($model, 'field23_1_1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(Yii::$app->myComponent->twoColumnInputSm(Yii::$app->myComponent->twoColumnInputSm(['type' => 'number'])))?>
    <?= $form->field($model, 'field23_2_1', Yii::$app->myComponent->twoColumnNameSm(''))->textInput(Yii::$app->myComponent->twoColumnInputSm(Yii::$app->myComponent->twoColumnInputSm(['type' => 'number'])))?>

    <h6>24. Продолжительность перемен, использующихся для питания детей</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Перемены, использующиеся для питания детей</td>
            <td>Продолжительность перемены (в минутах)</td>
        </tr>
        <tr>
            <td>24.1</td>
            <td>В I смену</td>
            <td><?= $form->field($model, 'field24_1')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.1</td>
            <td>в т.ч. перед первым уроком</td>
            <td><?= $form->field($model, 'field24_2')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.2</td>
            <td>после первого урока</td>
            <td><?= $form->field($model, 'field24_3')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.3</td>
            <td>после второго урока</td>
            <td><?= $form->field($model, 'field24_4')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.4</td>
            <td>после третьего урока</td>
            <td><?= $form->field($model, 'field24_5')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.5</td>
            <td>после четвертого урока</td>
            <td><?= $form->field($model, 'field24_6')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.6</td>
            <td>после пятого урока</td>
            <td><?= $form->field($model, 'field24_7')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.7</td>
            <td>после шестого урока</td>
            <td><?= $form->field($model, 'field24_8')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.1.8</td>
            <td>после седьмого урока</td>
            <td><?= $form->field($model, 'field24_9')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2</td>
            <td>Во II смену</td>
            <td><?= $form->field($model, 'field24_10')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2.1</td>
            <td>в т.ч. перед первым уроком</td>
            <td><?= $form->field($model, 'field24_11')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2.2</td>
            <td>после первого урока</td>
            <td><?= $form->field($model, 'field24_12')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2.3</td>
            <td>после второго урока</td>
            <td><?= $form->field($model, 'field24_13')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2.4</td>
            <td>после третьего урока</td>
            <td><?= $form->field($model, 'field24_14')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2.5</td>
            <td>после четвертого урока</td>
            <td><?= $form->field($model, 'field24_15')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.2.6</td>
            <td>после пятого урока</td>
            <td><?= $form->field($model, 'field24_16')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.3</td>
            <td>Во III смену</td>
            <td><?= $form->field($model, 'field24_17')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.3.1</td>
            <td>в т.ч. перед первым уроком</td>
            <td><?= $form->field($model, 'field24_18')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.3.2</td>
            <td>после первого урока</td>
            <td><?= $form->field($model, 'field24_19')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.3.3</td>
            <td>после второго урока</td>
            <td><?= $form->field($model, 'field24_20')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.3.4</td>
            <td>после третьего урока</td>
            <td><?= $form->field($model, 'field24_21')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>

        </tr>
        <tr>
            <td>24.3.5</td>
            <td>после четвертого урока</td>
            <td><?= $form->field($model, 'field24_22')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>

    </table>

</div>
