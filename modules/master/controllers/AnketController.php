<?php

namespace app\modules\master\controllers;

use yii\web\Controller;

/**
 * Default controller for the `master` module
 */
class AnketController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionTest()
    {
        return $this->render('test');
    }
}
