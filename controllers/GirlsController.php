<?php

namespace app\controllers;

use Yii;
use app\models\Girls;
use app\models\GirlsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GirlsController implements the CRUD actions for Girls model.
 */
class GirlsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
                'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                                'delete' => ['POST'],
                        ],
                ],
        ];
    }

    /**
     * Lists all Girls models.
     * @return mixed
     */
    public function actionIndex()
    {

        $ankets = Girls::find()->all();
        return $this->render('index', ['ankets' => $ankets]);
        /*   $searchModel = new GirlsSearch();
           $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

           return $this->render('index', [
                   'searchModel' => $searchModel,
                   'dataProvider' => $dataProvider,
           ]);*/
    }

    /**
     * Displays a single Girls model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $anket = Girls::find()->where(['id' => $id])->one();
        return $this->render('single', [
                'anket' => $anket
        ]);
    }

    /**
     * Creates a new Girls model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Girls();

        if (Yii::$app->request->isPost) {

            $post = Yii::$app->request->post();

            if ($model->load($post)) {
                die("s");
                $file = UploadedFile::getInstance($model, 'file');
                if ($file != null) {
                    $file = $model->uploadFile($file);
                    $model->file = $file;
                };
                $model->save();
                return $this->actionIndex();
            } else {
                $model->name = $post["name"];
                $model->description = $post["description"];
                $model->age = intval($post["age"]);
                $model->height = intval($post["height"]);
                $model->sex = $post["sex"];
                if ($model->save(false)) {
                    return $this->actionIndex();
                }
            }
        }

        return $this->render('create', [
                'model' => $model,
        ]);
    }

    /**
     * Updates an existing Girls model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            die("d");
        }
        /*  if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect(['view', 'id' => $model->id]);
          }*/

        return $this->render('update', [
                'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Girls model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Girls model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Girls the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Girls::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
