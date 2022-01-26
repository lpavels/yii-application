<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DirectorTable25 */

?>
<div class="director-table25-create">

    <h6>25. Формы организации основного питания</h6>
    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Формы организации основного питания</td>
            <td>1/0</td>
        </tr>
        <tr>
            <td>25.1</td>
            <td>Классический завтрак и обед (1 ассортимент блюд)</td>
            <td><?= $form->field($model, 'field25_1')->textInput([['type' => 'number']])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>25.2</td>
            <td>Завтрак и обед с блюдами по выбору (несколько вариантов ассортимента блюд)</td>
            <td><?= $form->field($model, 'field25_2')->textInput([['type' => 'number']])->label(
                    false
                ) ?></td>
        </tr>
        <tr>
            <td>25.3</td>
            <td>Шведский стол</td>
            <td><?= $form->field($model, 'field25_3')->textInput([['type' => 'number']])->label(
                    false
                ) ?></td>
        </tr>
    </table>

</div>
