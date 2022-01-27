<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Deti */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Detis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'field1_1',
            'field1_2',
            'field1_3',
            'field1_4',
            'field1_5',
            'field1_6',
            'field1_7',
            'field1_8',
            'field1_9',
            'field1_10',
            'field1_11',
            'field1_12',
            'field1_13',
            'field1_14',
            'field1_15',
            'field1_16',
            'field1_17',
            'field1_18',
            'field1_19',
            'field1_20',
            'field1_21',
            'field1_22',
            'field1_23',
            'table_20',
            'table_24',
            'table_25',
            'table_26',
            'table_28',
            'table_30',
            'table_32',
            'table_33',
            'table_37',
            'table_38',
            'table_39',
            'table_40',
            'table_43',
            'table_44',
            'table_45',
            'table_46',
            'create_at',
        ],
    ]) ?>

</div>
