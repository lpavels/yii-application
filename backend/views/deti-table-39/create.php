<?php

use yii\bootstrap4\Html;
$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table39-create">

    <h6>39.	Оцените уровень двигательной активности ребенка (с учетом занятий физической культурой, спортом, танцами, активных игр)</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Оцените уровень двигательной активности ребенка</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>39.1</td>
            <td>Спортом, танцами, физической культурой не занимается
            </td>
            <td><?= $form->field($model, 'field39_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>39.2</td>
            <td>Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет МЕНЕЕ 2 Ч. - ежедневно
            </td>
            <td><?= $form->field($model, 'field39_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>39.3</td>
            <td>Ежедневная организованная двигательная активность (спорт, танцы) и неорганизованная двигательная активность (активные игры, иные виды двигательной активности) составляет НЕ МЕНЕЕ 2 Ч. - ежедневно
            </td>
            <td><?= $form->field($model, 'field39_3')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
