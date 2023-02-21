<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Mobil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mobil-form card card-info">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nopol')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama_mobil')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'jenis_mobil')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tahun_pembuatan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'harga_sewa')->textInput() ?>

        <?= $form->field($model, 'kapasitas_penumpang')->textInput() ?>

        <?= $form->field($model, 'status_mobil')->textInput(['maxlength' => true]) ?>
    </div>
    
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>