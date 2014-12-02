<?php

use yii\db\Schema;
use yii\db\Migration;

class m141202_112528_tbl_members extends Migration
{
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%members}}', [
            'id' => Schema::TYPE_PK,
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING,
            'skypename' => Schema::TYPE_STRING,
            'birthday' => Schema::TYPE_DATE,
            'group_id' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
            'status_id' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
            'class_id' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
        ], $tableOptions);
        $this->createIndex('FK_members_status', '{{%members}}', 'status_id');
        $this->addForeignKey(
            'FK_members_status', '{{%members}}', 'status_id', '{{%edstatus}}', 'id', 'SET NULL', 'CASCADE'
        );
        $this->createIndex('FK_members_studygroups', '{{%members}}', 'group_id');
        $this->addForeignKey(
            'FK_members_studygroups', '{{%members}}', 'group_id', '{{%studygroups}}', 'id', 'SET NULL', 'CASCADE'
        );
        $this->createIndex('FK_members_studyclass', '{{%members}}', 'class_id');
        $this->addForeignKey(
            'FK_members_studyclass', '{{%members}}', 'class_id', '{{%studygroups}}', 'id', 'SET NULL', 'CASCADE'
        );

    }

    public function down()
    {
        $this->dropTable('{{%members}}');
    }
}