<?php
    use app\models\Transkrip;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Transkrip Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'id_mahasiswa',
                'kode_transaksi',
                'tanggal_transaksi',
                'tanggal_transaksi',
                'ipk',
                'tahun_lulus',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Transkrip $model){
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); 
    ?>
</div>