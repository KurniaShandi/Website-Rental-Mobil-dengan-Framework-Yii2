<?php

use common\models\Penyewa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\PenyewaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Penyewa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyewa-index content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <?= Html::encode($this->title) ?>
                    </div>
                    <div class="card-tools">
                        <?= Html::a('<span class="btn-label"><i class="fa fa-plus"></i></span> Data Baru', ['create'], ['class' => 'btn btn-success btn-sm waves-effect waves-light']) ?>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id_penyewa',
                            'nama_lengkap',
                            'password',
                            'email:email',
                            'jenkel',
                            //'pekerjaan',
                            //'alamat:ntext',
                            //'kota',
                            //'provinsi',
                            [
                                'class'     => 'yii\grid\ActionColumn',
                                'header'    => 'Tindakan',
                                'template'  => '{leadView} {leadUpdate} {leadDelete}',
                                'buttons'   => [
                                    'leadView'      => function ($url, $model){
                                        $url = url::to(['view', 'id_penyewa' =>$model->id_penyewa]);
                                        return Html::a('<span class="fa fa-eye"></span>', $url, ['class' => 'btn btn-primary']);
                                    },
                                    'leadUpdate'    => function ($url, $model){
                                        $url = url::to(['update', 'id_penyewa' => $model->id_penyewa]);
                                        return Html::a('<span class="nav-icon fas fa-edit"></span>', $url, ['class' => 'btn btn-warning']);
                                    },
                                    'leadDelete'    => function ($url, $model){
                                        $url = url::to(['delete', 'id_penyewa' => $model->id_penyewa]);
                                        return Html::a('<span class="fa fa-trash"></span>', $url, [
                                            'title'         => 'delete',
                                            'data-confirm'  => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                            'data-method'   => 'post',
                                            'class'         => 'btn btn-danger',
                                        ]);
                                    },
                                ]
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>