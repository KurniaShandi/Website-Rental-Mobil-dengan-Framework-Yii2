<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Sewa $model */

$this->title = $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Data Sewa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sewa-view content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Data Sewa : <?= Html::encode($this->title) ?>
                    </h3>
                    <div class="card-tools">
                        <?= Html::a('Lihat Semua', ['index',], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= Html::a('Ubah', ['update', 'no_nota' => $model->no_nota], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('Hapus', ['delete', 'no_nota' => $model->no_nota], [
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
                            'no_nota',
                            'id_penyewa',
                            'tgl_sewa',
                            'jaminan',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>