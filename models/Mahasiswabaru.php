<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswabaru".
 *
 * @property int $id115
 * @property string $no_induk_mahasiswa115
 * @property string $nama_mahasiswa115
 * @property string $kelas115
 * @property string $status115
 */
class Mahasiswabaru extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswabaru';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa115', 'nama_mahasiswa115', 'kelas115', 'status115'], 'required'],
            [['no_induk_mahasiswa115'], 'string', 'max' => 15],
            [['nama_mahasiswa115'], 'string', 'max' => 100],
            [['kelas115'], 'string', 'max' => 10],
            [['status115'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id115' => 'Id115',
            'no_induk_mahasiswa115' => 'No Induk Mahasiswa115',
            'nama_mahasiswa115' => 'Nama Mahasiswa115',
            'kelas115' => 'Kelas115',
            'status115' => 'Status115',
        ];
    }
}
