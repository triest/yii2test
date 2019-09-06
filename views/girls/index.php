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
<div class="girls-index">
    <div class="col-lg-4 col-md-3 col-sm-5 col-xs-9 box-shadow">

        <?php foreach ($ankets as $anket): ?>
            <div class="col-lg-4 col-md-3 col-sm-5 col-xs-9 box-shadow">
                <div class="card  border-dark" style="width: 18rem; background-color: #eeeeee;
             border: 1px solid transparent;
             border-color: #666869;">
                    <div class="card-body">
                        <article class="post">
                            <div class="post-thumb">
                                <img src="<?= Yii::$app->request->baseUrl . $anket->getMainImage(); ?>"
                                     alt="" width="150">


                                <a href="<?= Url::toRoute([
                                        'girls/view',
                                        'id' => $anket->id
                                ]); ?>"> <?= $anket->name ?></a>
                            </div>

                            <?= $anket->age ?>
                        </article>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
