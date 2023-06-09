<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transkrip}}`.
 */
class m230526_011733_create_transkrip_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transkrip}}', [
            'id' => $this->primaryKey(),
            'id_mahasiswa' => $this->integer()->notNull()->unique(),
            'kode_transaksi' => $this->integer()->notNull(),
            'tanggal_transaksi' => $this->date()->notNull(),
            'ipk' => $this->integer()->notNull(),
            'tahun_lulus' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%transkrip}}');
    }
}
