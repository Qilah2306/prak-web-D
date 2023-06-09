<?php
    use yii\widgets\Detailview;
    use app\models\MahasiswaBaru;
?>
<?=
    Detailview::widget([
        'model' => $model,
        'attributes' => [
            'id115',
            'no_induk_mahasiswa115',
            'nama_mahasiswa115',
            'kelas115',
            'status115',
        ],
    ]);
?>