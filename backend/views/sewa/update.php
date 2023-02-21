<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Sewa $model */

$this->title = 'Update Sewa: ' . $model->no_nota;
$this->params['breadcrumbs'][] = ['label' => 'Sewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_nota, 'url' => ['view', 'no_nota' => $model->no_nota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sewa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
