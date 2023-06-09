<?php

namespace app\controllers;
use app\models\Transkrip;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

class TranskripController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Transkrip::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index' , [
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionInsert()
    {
        $transkrip = new Transkrip;
        $transkrip-> id = 10;
        $transkrip->id_mahasiswa = 2;
        $transkrip->kode_transaksi = 5;
        $transkrip->tanggal_transaksi = '2023-05-20';
        $transkrip->ipk = 3;
        $transkrip->tahun_lulus = 2023;
        if ($transkrip->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($transkrip->getErrors());
            die();
        }

    }
    public function actionUpdate($id)
    {
        $transkrip = Transkrip::findOne($id);
        $transkrip->ipk = 4;
        if ($transkrip->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($transkrip->getError());
            die();
        }
    }
    public function actionDelete($id)
    {
        $transkrip = Transkrip::findOne($id);
        if ($transkrip->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($transkrip->getError());
            die();
        }

    }
    public function actionView($id)
    {
        $transkrip = Transkrip::findOne($id);
            return $this->render('view', [
                'model' => $transkrip,
            ]);
         
    }

}
