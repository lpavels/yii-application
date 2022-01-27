<?php

use yii\bootstrap4\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DetiTable30 */

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table30-create">

    <?= $form->field($model, 'field29', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <?= $form->field($model, 'field30', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    ) ?>
    <table class="table table-bordered table-sm table30">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>30.1</td>
            <td>комплексный обед
            </td>
            <td><?= $form->field($model, 'field30_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.2</td>
            <td>первые блюда
            </td>
            <td><?= $form->field($model, 'field30_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.3</td>
            <td>салаты
            </td>
            <td><?= $form->field($model, 'field30_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.4</td>
            <td>бутерброды
            </td>
            <td><?= $form->field($model, 'field30_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.5</td>
            <td>гарниры
            </td>
            <td><?= $form->field($model, 'field30_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.6</td>
            <td>основные (мясные и рыбные) блюда
            </td>
            <td><?= $form->field($model, 'field30_6')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.7</td>
            <td>сосиски, сардельки
            </td>
            <td><?= $form->field($model, 'field30_7')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.8</td>
            <td>выпечные изделия (собственного и промышленного изготовления)
            </td>
            <td><?= $form->field($model, 'field30_8')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.9</td>
            <td>кондитерские изделия (промышленного изготовления)
            </td>
            <td><?= $form->field($model, 'field30_9')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.10</td>
            <td>горячие напитки
            </td>
            <td><?= $form->field($model, 'field30_10')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.11</td>
            <td>холодные напитки
            </td>
            <td><?= $form->field($model, 'field30_11')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.12</td>
            <td>фрукты
            </td>
            <td><?= $form->field($model, 'field30_12')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>30.13</td>
            <td>продукция из вендингового аппарата (автомата)
            </td>
            <td><?= $form->field($model, 'field30_13')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
