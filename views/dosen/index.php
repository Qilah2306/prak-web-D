<?php
    use app\models\Dosen;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;
    

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Dosen Baru', ['class' => 'btn btn-primary'])?>
    </p>
    
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'nip',
                'nama',
                'id_prodi',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Dosen $model){
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]);
    ?>
</div>
