<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetiTable40 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deti Table40s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deti-table40-view">

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
            'field40_1',
            'field40_2',
            'field40_3',
            'field40_4',
            'field40_5',
            'field40_6',
            'field40_7',
            'field40_8',
            'field40_9',
            'field40_10',
            'field40_11',
            'field40_12',
            'field40_13',
            'field40_14',
            'field40_15',
            'field40_16',
            'field40_17',
            'field40_18',
            'field40_19',
            'field40_20',
            'field40_21',
            'field40_22',
            'field40_23',
            'field40_24',
            'field40_25',
            'field40_26',
            'field40_27',
            'field40_28',
            'field40_29',
            'create_at',
        ],
    ]) ?>

</div>
