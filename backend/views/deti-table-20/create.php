<?php

use yii\bootstrap4\Html;
$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table20-create">
    <?= $form->field($model, 'field20_1', Yii::$app->myComponent->twoColumnNameSm(''))->dropdownList(
        $items,
        Yii::$app->myComponent->twoColumnInputSm()
    )->label('20. Имеются ли у ребенка хронические заболевания?') ?>
    <table class="table table-bordered table-sm table20">
        <tr>
            <td>№</td>
            <td>Показатели</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>20.1</td>
            <td>Болезни сердечно-сосудистой системы</td>
            <td><?= $form->field($model, 'field20_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.2</td>
            <td>Болезни нервной системы</td>
            <td><?= $form->field($model, 'field20_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.3</td>
            <td>Нарушения осанки</td>
            <td><?= $form->field($model, 'field20_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.4</td>
            <td>Нарушения зрения</td>
            <td><?= $form->field($model, 'field20_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.5</td>
            <td>Болезни щитовидной железы</td>
            <td><?= $form->field($model, 'field20_6')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.6</td>
            <td>Заболевания органов пищеварения</td>
            <td><?= $form->field($model, 'field20_7')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.7</td>
            <td>Анемии</td>
            <td><?= $form->field($model, 'field20_8')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.8</td>
            <td>Ожирение</td>
            <td><?= $form->field($model, 'field20_9')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.9</td>
            <td>Сахарный диабет</td>
            <td><?= $form->field($model, 'field20_10')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.10</td>
            <td>Пищевая аллергия</td>
            <td><?= $form->field($model, 'field20_11')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.11</td>
            <td>Целиакия</td>
            <td><?= $form->field($model, 'field20_12')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.12</td>
            <td>Муковисцидоз</td>
            <td><?= $form->field($model, 'field20_13')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>20.13</td>
            <td>Фенилкетонурия</td>
            <td><?= $form->field($model, 'field20_14')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>
</div>
