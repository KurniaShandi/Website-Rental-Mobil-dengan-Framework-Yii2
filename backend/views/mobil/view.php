<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Mobil $model */

$this->title = $model->no_mobil;
$this->params['breadcrumbs'][] = ['label' => 'Data Mobil Rental', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mobil-view content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Data Mobil Rental : <?= Html::encode($this->title) ?>
                    </h3>
                    <div class="card-tools">
                        <?= Html::a('Lihat Semua', ['index',], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= Html::a('Ubah', ['update', 'no_mobil' => $model->no_mobil], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('Hapus', ['delete', 'no_mobil' => $model->no_mobil], [
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
                            'no_mobil',
                            'nopol',
                            'nama_mobil',
                            'jenis_mobil',
                            'tahun_pembuatan',
                            'harga_sewa',
                            'kapasitas_penumpang',
                            'status_mobil',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>