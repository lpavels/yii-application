<?php

use yii\bootstrap4\Html;

$items = [
    '1' => 'не употребляю',
    '2' => 'ем каждый день',
    '3' => 'не менее 3 раз в неделю',
    '4' => 'ем 1-2 раза в неделю',
    '5' => 'ем не менее 1 раза в месяц',
];
?>
<div class="deti-table40-create">

    <h6>40.	Как часто ребенок в домашнем питании употребляет основные группы пищевых продуктов (нужно заполнить таблицу по группам продуктов и выбрать следующие варианты ответов: не употребляю, ем каждый день; не менее 3 раз в неделю, 1-2 раза в неделю, не менее 1 раза в месяц, реже 1 раза в месяц):</h6>

    <table class="table table-bordered table-sm">
        <tr>
            <td>№</td>
            <td>Оцените уровень двигательной активности ребенка</td>
            <td>Да/нет</td>
        </tr>
        <tr>
            <td>40.1</td>
            <td>каши
            </td>
            <td><?= $form->field($model, 'field40_1')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.2</td>
            <td>макаронные изделия
            </td>
            <td><?= $form->field($model, 'field40_2')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.3</td>
            <td>мясо
            </td>
            <td><?= $form->field($model, 'field40_3')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.4</td>
            <td>птица
            </td>
            <td><?= $form->field($model, 'field40_4')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.5</td>
            <td>рыба
            </td>
            <td><?= $form->field($model, 'field40_5')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.6</td>
            <td>колбаса, сосиски, сардельки
            </td>
            <td><?= $form->field($model, 'field40_6')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.7</td>
            <td>творог
            </td>
            <td><?= $form->field($model, 'field40_7')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.8</td>
            <td>яйца
            </td>
            <td><?= $form->field($model, 'field40_8')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.9</td>
            <td>овощи вареные
            </td>
            <td><?= $form->field($model, 'field40_9')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.10</td>
            <td>овощи сырые
            </td>
            <td><?= $form->field($model, 'field40_10')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.11</td>
            <td>картофель
            </td>
            <td><?= $form->field($model, 'field40_11')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.12</td>
            <td>зелень
            </td>
            <td><?= $form->field($model, 'field40_12')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.13</td>
            <td>фаст-фуд (гамбургеры, пицца и т.п)
            </td>
            <td><?= $form->field($model, 'field40_13')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.14</td>
            <td>выпечные изделия
            </td>
            <td><?= $form->field($model, 'field40_14')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.15</td>
            <td>конфеты, шоколад
            </td>
            <td><?= $form->field($model, 'field40_15')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.16</td>
            <td>кондитерские изделия – торты, пирожные, пряники, печенье, вафли (за исключением конфет и шоколада)
            </td>
            <td><?= $form->field($model, 'field40_16')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.17</td>
            <td>майонез
            </td>
            <td><?= $form->field($model, 'field40_17')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.18</td>
            <td>кетчуп
            </td>
            <td><?= $form->field($model, 'field40_18')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.19</td>
            <td>сладкие творожные сырочки
            </td>
            <td><?= $form->field($model, 'field40_19')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.20</td>
            <td>соки
            </td>
            <td><?= $form->field($model, 'field40_20')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.21</td>
            <td>Компоты и кисели
            </td>
            <td><?= $form->field($model, 'field40_21')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.22</td>
            <td>сладкие газированные напитки
            </td>
            <td><?= $form->field($model, 'field40_22')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.23</td>
            <td>молоко
            </td>
            <td><?= $form->field($model, 'field40_23')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.24</td>
            <td>кисломолочная продукция
            </td>
            <td><?= $form->field($model, 'field40_24')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.25</td>
            <td>чай
            </td>
            <td><?= $form->field($model, 'field40_25')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.26</td>
            <td>кофе
            </td>
            <td><?= $form->field($model, 'field40_26')->dropdownList($items)->label(false) ?></td>
        </tr>
        <tr>
            <td>40.27</td>
            <td>какао
            </td>
            <td><?= $form->field($model, 'field40_27')->dropdownList($items)->label(false) ?></td>
        </tr>
    </table>

</div>
