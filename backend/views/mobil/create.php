<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Mobil $model */

$this->title = 'Tambah Data Mobil Rental';
//$this->params['breadcrumbs'][] = ['label' => 'Data Mobil Rental', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobil-create content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
