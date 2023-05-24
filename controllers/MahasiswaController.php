<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //memanggil view index
        return $this->render('index');
    }

    public function actionDaftarNilai()
    {
        return $this->render('daftarnilai');
        
    }

}
