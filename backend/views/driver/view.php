<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Driver $model */

$this->title = $model->id_driver;
$this->params['breadcrumbs'][] = ['label' => 'Data Drivers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="driver-view content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Data Driver : <?= Html::encode($this->title) ?>
                    </h3>
                    <div class="card-tools">
                        <?= Html::a('Lihat Semua', ['index',], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= Html::a('Ubah', ['update', 'id_driver' => $model->id_driver], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('Hapus', ['delete', 'id_driver' => $model->id_driver], [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="card-body">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id_driver',
                            'nama',
                            'alamat:ntext',
                            'no_hp',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>