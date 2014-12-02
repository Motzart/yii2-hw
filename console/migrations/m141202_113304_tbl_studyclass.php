<?php

use yii\db\Schema;
use yii\db\Migration;

class m141202_113304_tbl_studyclass extends Migration
{
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%studyclass}}', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'descript'  => Schema::TYPE_TEXT,
            'group_id'  => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
        ], $tableOptions);
        $this->createIndex('FK_studyclass_studygroups', '{{%studyclass}}', 'group_id');
        $this->addForeignKey(
            'FK_studyclass_studygroups', '{{%studyclass}}', 'group_id', '{{%studygroups}}', 'id', 'SET NULL', 'CASCADE'
        );

    }

    public function down()
    {
        $this->dropTable('{{%studyclass}}');
    }
}
