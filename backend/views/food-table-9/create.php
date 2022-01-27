<?php

use yii\bootstrap4\Html;

?>
<div class="food-table9-create">

    <h6>9. Укажите количество школ (из числа участвующих в анкетировании), в которые поставляется пищевая продукция, после
        проведения дополнительных исследований по показателям качества: </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td colspan="2">Количество школ (из числа участвующих в анкетировании), в которые поставляется пищевая
                продукция, после проведения дополнительных исследований
            </td>
        </tr>
        <tr>
            <td>9.1.</td>
            <td>по показателям фальсификации</td>
            <td><?= $form->field($model, 'field9_1')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>9.2.</td>
            <td>на антибиотики</td>
            <td><?= $form->field($model, 'field9_2')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>9.3.</td>
            <td>на пестициды</td>
            <td><?= $form->field($model, 'field9_3')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>9.4.</td>
            <td>на содержание витаминов и микроэлементов</td>
            <td><?= $form->field($model, 'field9_4')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>9.5.</td>
            <td>на микробиологические показатели</td>
            <td><?= $form->field($model, 'field9_5')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
