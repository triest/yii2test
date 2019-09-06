<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GirlsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Girls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-9 box-shadow">
                <div class="card  border-dark" style="width: 25rem; background-color: #eeeeee;
             border: 1px solid transparent;
             border-color: #666869;
">
                    <img src="<?= Yii::$app->request->baseUrl . $anket->getMainImage(); ?>"
                         alt="" width="150">

                    <?= $anket->status ?>
                    <br>
                    Последний раз был:
                    <br>

                    <br>
                    <div class="card-body" id="app7">
                        <privatepanel :id="{{$girl->id}}" :user_id="{{$girl->user_id}}"></privatepanel>
                    </div>
                    <br>
                    <a class="btn btn-primary" href="<?= Url::toRoute([
                            'girls/update',
                            'id' => $anket->id
                    ]); ?>">Редактировать </a>
                    <br>

                    <div class="card-body" id="likesApp">

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-9 box-shadow">
                <div class="card  border-dark" style="width: 30rem; background-color: #eeeeee;
             border: 1px solid transparent;
             border-color: #666869;
">
                    <h4 class="card-title">
                        <?= $anket->name ?>
                    </h4>


                    <div id="phoneRequwestApp">

                    </div>


                    <p class="card-text"><b>Рост :</b> <?= $anket->height ?></p>
                    <p class="card-text"><b>Вес : </b></p>
                    <p class="card-text"><b>Возраст :</b> <?= $anket->age ?></p>
                    <p class="card-text"><b>Внешность :</b></p>


                    <p class="card-text"><b>Хочу встретиться с :</b>
                    </p>
                    В возрасте от
                </div>
            </div>
            <br>


        </div>

        <div class="row">
            <div class="card  border-dark" style="width: 70rem; background-color: #eeeeee;
             border: 1px solid transparent;
             border-color: #666869;
">
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-9 box-shadow">

                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-xs-9 box-shadow">
                    <b>Цели знакомства:</b> <br>

                </div>
            </div>

            <br>
            <br>
            <b>Город:</b> <br>

            <br>
            <b>Регион:</b> <br>

            <?= $anket->description ?>

            <br>
            <div class="container gallery-container">
                <div class="tz-gallery">
                    <div class="row">

                    </div>
                </div>
            </div>


            <label>Приватное сообщение:</label>
            <p class="card-text>"></p>

            <label>Приватные фотографии:</label>
            <div class="container gallery-container">
                <div class="tz-gallery">
                    <div class="row">

                    </div>
                </div>
            </div>

            <br>
            <a class="btn btn-primary" href="{{route('main')}}" role="link" onclick=" relocate_home()">К списку
                анкет</a>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>


            <script>
                baguetteBox.run('.tz-gallery');
            </script>
        </div>
    </div>
</div>

