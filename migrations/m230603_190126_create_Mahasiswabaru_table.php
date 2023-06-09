<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Mahasiswabaru}}`.
 */
class m230603_190126_create_Mahasiswabaru_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Mahasiswabaru}}', [
            'id115' => $this->primaryKey(),
            'no_induk_mahasiswa115' => $this->string(15)->notNull(),
            'nama_mahasiswa115'=> $this->string(100)->notNull(),
            'kelas115' => $this->string(10)->notNull(),
            'status115' => $this->string(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Mahasiswabaru}}');
    }
}
