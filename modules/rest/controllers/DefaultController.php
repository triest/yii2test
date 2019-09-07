<?php

namespace app\modules\rest\controllers;

use app\models\Girls;
use yii\web\Controller;

/**
 * Default controller for the `rest` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $anket = Girls::find()->where(['id' => 78])->one();
        return $this->asJson($anket);
    }
}
