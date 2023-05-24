<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id
 * @property string $nip
 * @property string $nama
 * @property string $id_prodi
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama', 'id_prodi'], 'required'],
            [['nip'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 100],
            [['id_prodi'], 'string', 'max' => 7],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'id_prodi' => 'Id Prodi',
        ];
    }
}
