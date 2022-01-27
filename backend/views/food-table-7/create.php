<?php

use yii\bootstrap4\Html;

?>
<div class="food-table7-create">

    <h6>7. Количество школ, в которых обучаются дети с заболеваниями, требующими индивидуальный подход в организации питания
        (заполняется по всем обсуживаемым школам, участвующим в анкетировании): </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td rowspan="3">№</td>
            <td rowspan="3">Показатели</td>
            <td colspan="4">Количество школьников, получающих организованное питание</td>
        </tr>
        <tr>
            <td rowspan="2">всего</td>
            <td colspan="3">в т.ч.</td>
        </tr>
        <tr>
            <td>1-4 кл.</td>
            <td>5-9 кл.</td>
            <td>10-11 кл.</td>
        </tr>
        <tr>
            <td>7.1.</td>
            <td>Сахарный диабет</td>
            <td><?= $form->field($model, 'field7_1')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_2')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_3')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_4')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>7.2.</td>
            <td>Пищевая аллергия</td>
            <td><?= $form->field($model, 'field7_5')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_6')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_7')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_8')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>7.3.</td>
            <td>Целиакия</td>
            <td><?= $form->field($model, 'field7_9')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_10')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_11')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_12')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>7.4.</td>
            <td>Фенилкетонурия</td>
            <td><?= $form->field($model, 'field7_13')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_14')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_15')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_16')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>7.5.</td>
            <td>Муковисцидоз</td>
            <td><?= $form->field($model, 'field7_17')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_18')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_19')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
            <td><?= $form->field($model, 'field7_20')->textInput(['type' => 'number'])->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
