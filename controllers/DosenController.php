<?php

namespace app\controllers;
use app\models\Dosen;
use yii\data\ActiveDataProvider;

class DosenController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Dosen::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
