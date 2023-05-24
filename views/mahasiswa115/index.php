<?php
    use app\models\Mahasiswa115;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\GridView;

?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Mahasiswa Baru', ['class' => 'btn btn-primary']) ?>
    </p>

    
    <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'nim',
                'nama',
                'kelas',
                'jurusan',
                'profil115.foto_profil',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, Mahasiswa115 $model){
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); 
    ?>
</div>