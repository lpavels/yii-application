<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable26 */

?>
<div class="director-table26-create">

    <h6>26. Формы организации дополнительного питания </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Формы организации дополнительного питания</td>
            <td>1/0</td>
        </tr>
        <tr>
            <td>26.1</td>
            <td>Буфет – розничная торговля блюдами и продуктами</td>
            <td><?= $form->field($model, 'field26_1')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>26.2</td>
            <td>Предоставление комплексных обедов (с основной линии раздачи)</td>
            <td><?= $form->field($model, 'field26_2')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>26.3</td>
            <td>Предоставление блюд по выбору (с основной линии раздачи)</td>
            <td><?= $form->field($model, 'field26_3')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>26.4</td>
            <td>Вендинговое оборудование</td>
            <td><?= $form->field($model, 'field26_4')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
