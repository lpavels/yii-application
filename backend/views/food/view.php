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
