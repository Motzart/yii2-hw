<?php

use yii\db\Schema;
use yii\db\Migration;

class m141206_102210_crt_tables extends Migration
{
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%edstatus}}', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'descript'  => Schema::TYPE_TEXT,
        ], $tableOptions);

        $this->createTable('{{%studygroups}}', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'descript'  => Schema::TYPE_TEXT,
            'link'      => Schema::TYPE_STRING,
        ], $tableOptions);

        $this->createTable('{{%studyclass}}', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'descript'  => Schema::TYPE_TEXT,
            'group_id'  => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createIndex('Idx_clas_group', '{{%studyclass}}', 'group_id');
        $this->addForeignKey(
            'FK_clas_group', '{{%studyclass}}', 'group_id', '{{%studygroups}}', 'id', 'SET NULL', 'CASCADE'
        );

        $this->createTable('{{%members}}', [
            'id' => Schema::TYPE_PK,
            'firstname' => Schema::TYPE_STRING . ' NOT NULL',
            'lastname' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING,
            'skypename' => Schema::TYPE_STRING,
            'birthday' => Schema::TYPE_DATE,
            'group_id' => Schema::TYPE_INTEGER,
            'status_id' => Schema::TYPE_INTEGER,
            'class_id' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->createIndex('Idx_members_status', '{{%members}}', 'status_id');
        $this->addForeignKey(
            'FK_members_status', '{{%members}}', 'status_id', '{{%edstatus}}', 'id', 'SET NULL', 'CASCADE'
        );
        $this->createIndex('Idx_members_studygroups', '{{%members}}', 'group_id');
        $this->addForeignKey(
            'FK_members_studygroups', '{{%members}}', 'group_id', '{{%studygroups}}', 'id', 'SET NULL', 'CASCADE'
        );
        $this->createIndex('Idx_members_studyclass', '{{%members}}', 'class_id');
        $this->addForeignKey(
            'FK_members_studyclass', '{{%members}}', 'class_id', '{{%studygroups}}', 'id', 'SET NULL', 'CASCADE'
        );

    }
    public function down()
    {
        $this->dropTable('{{%members}}');
        $this->dropTable('{{%studyclass}}');
        $this->dropTable('{{%studygroups}}');
        $this->dropTable('{{%edstatus}}');
    }
}
