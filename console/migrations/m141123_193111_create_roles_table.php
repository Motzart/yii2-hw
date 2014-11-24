<?php

use yii\db\Schema;
use yii\db\Migration;

class m141123_193111_create_roles_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%roles}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'descrip' => Schema::TYPE_STRING . ' DEFAULT NULL',
        ], $tableOptions);

// Здесь не случайно дополнительные параметры таблицы вынесены в переменную $tableOptions и 
// индексам даны уникальные имена в формате idx_{таблица}_{поле}. Это делает миграции 
// кроссплатформенными, то есть полностью рабочими на базах MySQL и PostgreSQL.

//        $this->createIndex('idx_user_username', '{{%user}}', 'username');
//        $this->createIndex('idx_user_email', '{{%user}}', 'email');
//        $this->createIndex('idx_user_status', '{{%user}}', 'status');
    }

    public function down()
    {
        $this->dropTable('{{%roles}}');
//        echo "m141123_193111_create_roles_table cannot be reverted.\n";
//        return false;
    }
}
