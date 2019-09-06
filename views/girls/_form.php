<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $model app\models\Girls */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="girls-form">

    <form action="<?= Url::toRoute(['girls/create']) ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>"
               value="<?= Yii::$app->request->csrfToken; ?>"/>
        <label> Имя:</label>
        <input type="text" id="name" name="name">
        <div class="form-group">
            <label for="exampleInputFile">Текст анкеты:</label><br>
            <textarea name="description" id="description" required> </textarea>
        </div>
        <label for="age">Возраст:
            <input type="number" name="age" id="age" min="18" value="18" onkeypress="return isNumber(event)" checked>
        </label><br>
        <div class="form-group">
            <b> Пол:</b> <br>
            <input type="radio" id="contactChoice1"
                   name="sex"  value="famele" checked>
            <label for="contactChoice1">Женский</label>

            <input type="radio" id="contactChoice2"
                   name="sex" value="male">
            <label for="contactChoice2">Мужской</label>
        </div>
        <div class="form-group">
            <label for="height">Рост:
                <input type="number" name="height" min="100" value="160" onkeypress="return isNumber(event)">
            </label><br>
        </div>
        <div class="form-group">
            <label for="weight">Вес:
                <input type="number" name="weight" min="45" step="1" value="50"
                       pattern="[^@]+@[^@]+\.[0-9]{2,3}" onkeypress="return isNumber(event)">
            </label><br>
        </div>
        <input type="text" id="status" name="status">
        <br>

        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </form>




</div>
