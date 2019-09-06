<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Girls */

$this->title = 'Update Girls: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Girls', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="girls-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_update', [
        'model' => $model,
    ]) ?>

</div>
