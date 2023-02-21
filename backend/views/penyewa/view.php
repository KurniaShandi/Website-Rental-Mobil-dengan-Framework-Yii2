<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Penyewa $model */

$this->title = $model->id_penyewa;
$this->params['breadcrumbs'][] = ['label' => 'Data Penyewa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penyewa-view content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Data Penyewa : <?= Html::encode($this->title) ?>
                    </div>
                    <div class="card-tools">
                        <?= Html::a('Lihat Semua', ['index',], ['class' => 'btn btn-success btn-sm']) ?>
                        <?= Html::a('Ubah', ['update', 'id_penyewa' => $model->id_penyewa], ['class' => 'btn btn-primary btn-sm']) ?>
                        <?= Html::a('Hapus', ['delete', 'id_penyewa' => $model->id_penyewa], [
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
                            'id_penyewa',
                            'nama_lengkap',
                            'password',
                            'email:email',
                            'jenkel',
                            'pekerjaan',
                            'alamat:ntext',
                            'kota',
                            'provinsi',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>