<?php

namespace app\controllers;
use app\models\Profil115;
use yii\data\ActiveDataProvider;

class Profil115Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil115::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
