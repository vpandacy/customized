<?php

namespace app\modules\backend\controllers;

use app\components\Upload;
use Yii;
use app\models\News;
use app\models\NewsSearch;
use yii\web\Controller;
use yii\web\JqueryAsset;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $model->write_at = Yii::$app->request->post('write_at');
            $model->created_at = date('Y-m-d h:i:s');
            $model->updated_at = date('Y-m-d h:i:s');
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->updated_at = date('Y-m-d h:i:s');
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $new = News::find()->where(['id' => $id])->one();
        $new->status = News::STATUS_DELETED;
        $new->save();
        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

//图片上传
    public function actionUpload()
    {
        try {
            Yii::$app->response->format = Response::FORMAT_JSON;

            $model = new Upload();
            $info = $model->upImage();

            if ($info && is_array($info)) {
                return $info;
            } else {
                return ['code' => 1, 'msg' => 'error'];
            }

        } catch (\Exception $e) {
            return ['code' => 1, 'msg' => $e->getMessage()];
        }
    }

//    使用或停用新闻
    public function actionUsing()
    {
        $new = News::find()->where(['id' => Yii::$app->request->get('id')])->one();
        $new->status = Yii::$app->request->get('status');
        $new->save();
        return $this->redirect(['index']);
    }
}
