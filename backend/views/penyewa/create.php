<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Penyewa $model */

$this->title = 'Create Penyewa';
//$this->params['breadcrumbs'][] = ['label' => 'Penyewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyewa-create content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
