<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transkrip".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property int $kode_transaksi
 * @property string $tanggal_transaksi
 * @property int $ipk
 * @property int $tahun_lulus
 */
class Transkrip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transkrip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'kode_transaksi', 'tanggal_transaksi', 'ipk', 'tahun_lulus'], 'required'],
            [['id_mahasiswa', 'kode_transaksi', 'ipk', 'tahun_lulus'], 'integer'],
            [['tanggal_transaksi'], 'safe'],
            [['id_mahasiswa'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'kode_transaksi' => 'Kode Transaksi',
            'tanggal_transaksi' => 'Tanggal Transaksi',
            'ipk' => 'Ipk',
            'tahun_lulus' => 'Tahun Lulus',
        ];
    }
}
