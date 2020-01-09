<?php

namespace app\modules\backend\controllers;

use app\models\User;
use app\models\SignupForm;
use app\models\UserSearch;
use Yii;
use yii\base\Theme;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;

/**
 * UserBackendController implements the CRUD actions for UserBackend model.
 */
class UserController extends Controller
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
     * Lists all UserBackend models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserBackend model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new UserBackend model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new User();
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('create', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Updates an existing UserBackend model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
        Yii::$app->request->isPost === true ? $id = Yii::$app->request->post('SignupForm')['id'] : $id = Yii::$app->request->get('id');
        $user = $this->findModel($id);
        $model = new SignupForm();
        $model->scenario = 'update';

        if ($model->load(Yii::$app->request->post()) && $model->change_password()) {
            return $this->redirect(['/backend/user/view', 'id' => $model->id]);
        }

        $model->id = $user->id;
        $model->username = $user->username;
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserBackend model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->status = User::STATUS_DELETED;
        $model->save();
        return $this->redirect(['index']);
    }


    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        $model->scenario = 'signup';
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            return $this->redirect(['index']);
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionValidateForm()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new SignupForm();
        $model->scenario = 'update';
        $model->load(Yii::$app->request->post());
        return \yii\widgets\ActiveForm::validate($model);
    }

    public function actionValidateSignup()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = new SignupForm();
        $model->scenario = 'signup';
        $model->load(Yii::$app->request->post());
        return \yii\widgets\ActiveForm::validate($model);
    }
}
