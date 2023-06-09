<?php

namespace app\controllers;

use app\models\Mahasiswabaru;
use yii\data\ActiveDataProvider;
use Yii;

class MahasiswaBaruController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = MahasiswaBaru::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionInsert()
    {
        $mahasiswabaru = new MahasiswaBaru;
        $mahasiswabaru->no_induk_mahasiswa115 = '60200121115-' .rand(100,999);
        $mahasiswabaru->nama_mahasiswa115 = 'Aqilah Zahra';
        $mahasiswabaru->kelas115 = 'D';
        $mahasiswabaru->status115 = 'Baru';
        if ($mahasiswabaru->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswabaru->getErrors());
            die();
        }

    }

    public function actionUpdate($id)
    {
        $mahasiswabaru = MahasiswaBaru::findOne($id);
        if ($mahasiswabaru !== null) {
            $mahasiswabaru->kelas115 = 'A';
            $mahasiswabaru->status115 = 'Update';
            $mahasiswabaru->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');

            return $this->redirect(['index']);
        }
       

    }

    public function actionDelete($id)
    {
        $mahasiswabaru = MahasiswaBaru::findOne($id);
        if ($mahasiswabaru->delete()){
            return $this->redirect(['index']);
        }
        else {

            var_dump($mahasiswabaru->getErrors());
            die();
        }
        

    }

    public function actionView($id)
    {
        $mahasiswabaru = MahasiswaBaru::findOne($id);
        return $this-> render('view', ['model' =>$mahasiswabaru]);

    }

}
