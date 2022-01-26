<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetiTable30 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deti Table30s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deti-table30-view">

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
            'field29',
            'field30_1',
            'field30_2',
            'field30_3',
            'field30_4',
            'field30_5',
            'field30_6',
            'field30_7',
            'field30_8',
            'field30_9',
            'field30_10',
            'field30_11',
            'field30_12',
            'field30_13',
            'field30_14',
            'field30_15',
            'create_at',
        ],
    ]) ?>

</div>
