<?php

use yii\bootstrap4\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DetiTable43 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Deti Table43s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="deti-table43-view">

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
            'field41',
            'field42',
            'field43',
            'field43_1',
            'field43_2',
            'field43_3',
            'field43_4',
            'field43_5',
            'field43_6',
            'field43_7',
            'field43_8',
            'field43_9',
            'field43_10',
            'field43_11',
            'field43_12',
            'create_at',
        ],
    ]) ?>

</div>
