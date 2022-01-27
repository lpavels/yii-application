<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable18 */

?>
<div class="director-table18-create">

    <h6>18. Типы столовых в общеобразовательной организации</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Типы столовых в общеобразовательной организации</td>
            <td>Количество столовых</td>
        </tr>
        <tr>
            <td>18.1</td>
            <td>Работает на продовольственном сырье</td>
            <td><?= $form->field($model, 'field18_1')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>18.2</td>
            <td>Работает на продовольственном сырье и полуфабрикатах</td>
            <td><?= $form->field($model, 'field18_2')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>18.3</td>
            <td>Работает на полуфабрикатах</td>
            <td><?= $form->field($model, 'field18_3')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>18.4</td>
            <td>Работает в режиме буфета-раздаточной</td>
            <td><?= $form->field($model, 'field18_4')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>18.5</td>
            <td>Комната для приема пищи</td>
            <td><?= $form->field($model, 'field18_5')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
