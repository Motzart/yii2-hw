<?php

use yii\db\Schema;
use yii\db\Migration;

class m141123_200938_create_permis_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%permission}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'descript' => Schema::TYPE_TEXT . ' NOT NULL',
            'operation' => Schema::TYPE_TEXT . ' NOT NULL',
            'status' => Schema::TYPE_STRING,
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%permission}}');
    }
}
