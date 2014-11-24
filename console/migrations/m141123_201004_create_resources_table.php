<?php

use yii\db\Schema;
use yii\db\Migration;

class m141123_201004_create_resources_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
    
        $this->createTable('{{%resources}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'res_type' => Schema::TYPE_STRING . ' NOT NULL',
            'res_string' => Schema::TYPE_TEXT . ' NOT NULL',
            'descipt' => Schema::TYPE_TEXT,
        ], $tableOptions);
    }
    public function down()
    {
        $this->dropTable('{{%resources}}');
    }
}
