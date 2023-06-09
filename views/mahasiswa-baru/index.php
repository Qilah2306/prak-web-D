<?php

    use app\controllers\MahasiswaBaruController;
    use yii\grid\GridView;
    use yii\helpers\Html;
    use yii\grid\ActionColumn;
    use app\models\MahasiswaBaru;
    use yii\helpers\url;
?>
<?= Html::a('Mahasiswa Baru', ['mahasiswa-baru/insert'], ['class' => 'btn btn-primary']) ?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id115',
            'no_induk_mahasiswa115',
            'nama_mahasiswa115',
            'kelas115',
            'status115',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MahasiswaBaru $model){
                    return Url::toRoute([$action, 'id' => $model->id115]);
                }
            ],
        ],
    ]);
?>

