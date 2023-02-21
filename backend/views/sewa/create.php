<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Sewa $model */

$this->title = 'Create Sewa';
//$this->params['breadcrumbs'][] = ['label' => 'Sewas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sewa-create content">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
