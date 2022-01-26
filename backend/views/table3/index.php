<?php

use yii\bootstrap4\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анкета детей и родителей обучающихся';
?>
<div class="table3-index container">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(
            'Добавить',
            ['create'],
            ['class' => 'btn btn-success']
        ) ?>
    </p>
    <div class="table-responsive">
        <?= GridView::widget(
            [
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'options' => [
                    'class' => 'menus-table table-responsive'],
                'tableOptions' => [
                    'class' => 'table table-bordered table-responsive'
                ],
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    [
                        'attribute' => 'federal_district_id',
                        'value' => function ($model) {
                            return Yii::$app->myComponent->get_federal_name($model->federal_district_id);
                        },
                        'headerOptions' => ['class' => 'grid_table_th'],
                        'contentOptions' => ['class' => ''],
                        'filter' => Yii::$app->myComponent->FederalDistrictItems(),
                        'visible' => Yii::$app->user->can('admin')
                    ],
                    [
                        'attribute' => 'region_id',
                        'value' => function ($model) {
                            return Yii::$app->myComponent->get_region_name($model->region_id);
                        },
                        'headerOptions' => ['class' => 'grid_table_th'],
                        'contentOptions' => ['class' => ''],
                        'filter' => $region_items,
                        'visible' => Yii::$app->user->can('admin')
                    ],
                    [
                        'attribute' => 'Организация',
                        'value' => function ($model) {
                            return Yii::$app->myComponent->get_orgainization($model->user_id);
                        },
                        'headerOptions' => ['class' => 'grid_table_th'],
                        'contentOptions' => ['class' => ''],
                    ],
                    'create_at',
                    [
                        'header' => 'Посмотреть/отредактировать',
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update}',
                        //'template' => '{view} {update}<br> <div class="mt-1">{exportk} {delete}</div>',
                        'contentOptions' => ['class' => 'action-column text-center'],
                        'buttons' => [
                            'view' => function ($url, $model, $key) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-eye-open"></span>',
                                    $url,
                                    [
                                        'title' => Yii::t('yii', 'Посмотреть информацию о сотруднике'),
                                        'data-toggle' => 'tooltip',
                                        'class' => 'btn btn-sm btn-success',
                                    ]
                                );
                            },
                            'update' => function ($url, $model, $key) {
                                return Html::a(
                                    '<span class="glyphicon glyphicon-pencil"></span>',
                                    $url,
                                    [
                                        'title' => Yii::t('yii', 'Редактировать информацию о сотруднике'),
                                        'data-toggle' => 'tooltip',
                                        'class' => 'btn btn-sm btn-primary',
                                    ]
                                );
                            },
                        ],
                    ],
                ],
            ]
        ); ?>
    </div>
</div>
