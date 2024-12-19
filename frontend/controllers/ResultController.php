<?php

namespace frontend\controllers;

use app\models\Graduat;
use app\models\ResultOfEGA;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ResultController implements the CRUD actions for ResultOfEGA model.
 */
class ResultController extends Controller
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
     * Lists all ResultOfEGA models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ResultOfEGA::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'IDS' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ResultOfEGA model.
     * @param int $ide Ide
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ide)
    {
        return $this->render('view', [
            'model' => $this->findModel($ide),
        ]);
    }

    /**
     * Finds the ResultOfEGA model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ide Ide
     * @return ResultOfEGA the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ide)
    {
        if (($model = ResultOfEGA::findOne(['ide' => $ide])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
