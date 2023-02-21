<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\DetailSewa $model */

$this->title = 'Create Detail Sewa';
$this->params['breadcrumbs'][] = ['label' => 'Detail Sewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-sewa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
