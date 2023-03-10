<?php

namespace backend\controllers;

use common\models\Mobil;
use common\models\MobilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MobilController implements the CRUD actions for Mobil model.
 */
class MobilController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Mobil models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MobilSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mobil model.
     * @param int $no_mobil No Mobil
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_mobil)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_mobil),
        ]);
    }

    /**
     * Creates a new Mobil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Mobil();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_mobil' => $model->no_mobil]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mobil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $no_mobil No Mobil
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_mobil)
    {
        $model = $this->findModel($no_mobil);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_mobil' => $model->no_mobil]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mobil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $no_mobil No Mobil
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_mobil)
    {
        $this->findModel($no_mobil)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Mobil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $no_mobil No Mobil
     * @return Mobil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_mobil)
    {
        if (($model = Mobil::findOne(['no_mobil' => $no_mobil])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
