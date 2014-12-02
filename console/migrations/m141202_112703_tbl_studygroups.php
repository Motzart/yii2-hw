<?php

use yii\db\Schema;
use yii\db\Migration;

class m141202_112703_tbl_studygroups extends Migration
{
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%studygroups}}', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'descript'  => Schema::TYPE_TEXT,
            'link'      => Schema::TYPE_STRING,
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%studygroups}}');
    }
}
