<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Mobil $model */

$this->title = 'Edit Mobil';
$this->params['breadcrumbs'][] = ['label' => 'Data Mobil Rental', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->no_mobil, 'url' => ['view', 'no_mobil' => $model->no_mobil]];
$this->params['breadcrumbs'][] = 'Edit Data Mobil Rental';
?>
<div class="mobil-update content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
