<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Driver $model */

$this->title = 'Update Driver: ' . $model->id_driver;
$this->params['breadcrumbs'][] = ['label' => 'Data Drivers', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id_driver, 'url' => ['view', 'id_driver' => $model->id_driver]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="driver-update content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
