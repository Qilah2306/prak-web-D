<?php

namespace app\controllers;
use app\models\Mahasiswa115;
use yii\data\ActiveDataProvider;

class Mahasiswa115Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa115::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index' , [
            'dataProvider' => $dataProvider
        ]);
    }

}
