<?php

namespace app\controllers;

class DaftarController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionList()
    {
        return $this->render('riwayat');
    }


}
