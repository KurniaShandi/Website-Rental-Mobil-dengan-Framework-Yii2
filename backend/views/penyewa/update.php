<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Penyewa $model */

$this->title = 'Update Penyewa: ' . $model->id_penyewa;
$this->params['breadcrumbs'][] = ['label' => 'Data Penyewa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id_penyewa, 'url' => ['view', 'id_penyewa' => $model->id_penyewa]];
$this->params['breadcrumbs'][] = 'Edit Data Penyewa';
?>
<div class="penyewa-update content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
