<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Dosen}}`.
 */
class m230524_075952_create_Dosen_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Dosen}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(20)->notNull()->unique(),
            'nama' => $this->string(100)->notNull(),
            'id_prodi' => $this->string(7)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Dosen}}');
    }
}
