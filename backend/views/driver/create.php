<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Driver $model */

$this->title = 'Tambah Data Driver';
//$this->params['breadcrumbs'][] = ['label' => 'Drivers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-create content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
