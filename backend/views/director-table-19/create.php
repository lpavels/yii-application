<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable19 */

?>
<div class="director-table19-create">

    <h6>19. Форма организации питания </h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Форма организации питания</td>
            <td>1/0</td>
        </tr>
        <tr>
            <td>19.1</td>
            <td>Аутсорсинг (поставка пищевых продуктов + приготовление блюд)</td>
            <td><?= $form->field($model, 'field19_1')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>19.2</td>
            <td>Аутсорсинг (поставка пищевых продуктов)</td>
            <td><?= $form->field($model, 'field19_2')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>19.3</td>
            <td>Приобретение продуктов и приготовление блюд без привлечения сторонних организаций</td>
            <td><?= $form->field($model, 'field19_3')->dropdownList(Yii::$app->myComponent->statusYesNo())->label(
                    false
                ) ?></td>
        </tr>
    </table>
</div>
