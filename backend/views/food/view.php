<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\food */

$this->title = 'Просмотр анкеты';
$this->params['breadcrumbs'][] = ['label' => 'Анкета', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>
    .table-anket-views{
        border-collapse: collapse; /*убираем пустые промежутки между ячейками*/
        border: 1px solid #000000; /*устанавливаем для таблицы внешнюю границу серого цвета толщиной 1px*/
        font-size: 14px;
        margin-right: 35px;
    }
</style>
<div class="food-view container">

    <h5 align="center">АНКЕТА ДЛЯ ОЦЕНКИ ОРГАНИЗАЦИИ ПИТАНИЯ ОБУЧАЮЩИХСЯ В ОБЩЕОБРАЗОВАТЕЛЬНЫХ ОРГАНИЗАЦИЯХ</h5>
    <h6 align="center"><i>(опрос организаторов (операторов)питания, заполняется интервьюером)</i></h6>
    <?if($stausButtom == 1){
        if (Yii::$app->user->can('admin') || Yii::$app->user->can('food_organizer')){
            echo Html::a(
                'Отредактировать',
                ['create?id=' . $model['id']],
                [
                    'title' => Yii::t('yii', 'Редактировать информацию'),
                    'data-toggle' => 'tooltip',
                    'class' => 'btn btn-sm btn-primary btn-block',
                ]
            );
        }
        echo  Html::a(
            'Напечатать',
            ['print-anket?id=' . $model['id']],
            [
                'title' => Yii::t('yii', 'Напечатать анкету'),
                'data-toggle' => 'tooltip',
                'class' => 'btn btn-sm btn-warning btn-block',
            ]
        );
    }?>
    <div><b>5. Количество детей, обучающихся и питающихся в обслуживаемых школах (заполняется по каждой обслуживаемой школе):</b></div>
    <table border="1" class="table table-bordered table-sm table-anket-views">
        <tr align="center">
            <th>№</th>
            <th>Показатели</th>
            <th>1-4 кл.</th>
            <th>5-9 кл.</th>
            <th>10-11 кл.</th>
            <? if (Yii::$app->user->can('admin')) { ?>
                <th>ИТОГО</th>
            <? } ?>
        </tr>
        <tr>
            <td>5.1.</td>
            <td>Всего детей</td>
            <td align="center"><?= $foodOrganizer['field5_1']?></td>
            <td align="center"><?= $foodOrganizer['field5_2']?></td>
            <td align="center"><?= $foodOrganizer['field5_3']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_4']?></td>
            <? } ?>
        </tr>
        <tr>
            <td>5.2.</td>
            <td>Из них охвачены организованным питанием горячим организованным питанием</td>
            <td align="center"><?= $foodOrganizer['field5_5']?></td>
            <td align="center"><?= $foodOrganizer['field5_6']?></td>
            <td align="center"><?= $foodOrganizer['field5_7']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_8']?></td>
            <? } ?>
        </tr>
        <tr>
            <td>5.2.1.</td>
            <td>В т.ч. - горячие завтраки</td>
            <td align="center"><?= $foodOrganizer['field5_9']?></td>
            <td align="center"><?= $foodOrganizer['field5_10']?></td>
            <td align="center"><?= $foodOrganizer['field5_11']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_12']?></td>
            <? } ?>
        </tr>
        <tr>
            <td>5.2.2.</td>
            <td>Обеды</td>
            <td align="center"><?= $foodOrganizer['field5_13']?></td>
            <td align="center"><?= $foodOrganizer['field5_14']?></td>
            <td align="center"><?= $foodOrganizer['field5_15']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_16']?></td>
            <? } ?>
        </tr>
        <tr>
            <td>5.3.</td>
            <td>Охвачены двухразовым питанием (завтраки+обеды) </td>
            <td align="center"><?= $foodOrganizer['field5_17']?></td>
            <td align="center"><?= $foodOrganizer['field5_18']?></td>
            <td align="center"><?= $foodOrganizer['field5_19']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_20']?></td>
            <? } ?>
        </tr>
        <tr>
            <td>5.4.</td>
            <td>Охвачены трехразовым питанием (завтраки+обеды+полдники)</td>
            <td align="center"><?= $foodOrganizer['field5_21']?></td>
            <td align="center"><?= $foodOrganizer['field5_22']?></td>
            <td align="center"><?= $foodOrganizer['field5_23']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_24']?></td>
            <? } ?>
        </tr>
        <tr>
            <td>5.5.</td>
            <td>Охвачено организованным питанием всего</td>
            <td align="center"><?= $foodOrganizer['field5_25']?></td>
            <td align="center"><?= $foodOrganizer['field5_26']?></td>
            <td align="center"><?= $foodOrganizer['field5_27']?></td>
            <? if (Yii::$app->user->can('admin')) { ?>
                <td align="center"><?= $foodOrganizer['field5_28']?></td>
            <? } ?>
        </tr>
    </table>
    <?=
    $this->render(
        '/food-table-6/doc-food-table-6',
        [
            'model' => $foodTable6,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-7/doc-food-table-7',
        [
            'model' => $foodTable7,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-8/doc-food-table-8',
        [
            'model' => $foodTable8,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-9/doc-food-table-9',
        [
            'model' => $foodTable9,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-10/doc-food-table-10',
        [
            'model' => $foodTable10,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-11/doc-food-table-11',
        [
            'model' => $foodTable11,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-12/doc-food-table-12',
        [
            'model' => $foodTable12,
        ]
    ); ?>
    <?=
    $this->render(
        '/food-table-13/doc-food-table-13',
        [
            'model' => $foodTable13,
        ]
    ); ?>
</div>
