<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'да',
    '0' => 'нет',
];
?>
<div class="deti-table33-create table33">

    <h6>33.	Где Ваш ребенок обедает в учебные дни? (внесите информацию в таблицу:</h6>

    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Где Ваш ребенок обедает?</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>32.1</td>
            <td>дома</td>
            <td><?= $form->field($model, 'field33_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.2</td>
            <td>в школе кушает блюда, приготовленные в столовой</td>
            <td><?= $form->field($model, 'field33_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.3</td>
            <td>в школе кушает еду, принесенную из дома</td>
            <td><?= $form->field($model, 'field33_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>32.4</td>
            <td>не обедает</td>
            <td><?= $form->field($model, 'field33_4')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
