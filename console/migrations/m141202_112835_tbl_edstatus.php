<?php

use yii\db\Schema;
use yii\db\Migration;

class m141202_112835_tbl_edstatus extends Migration
{
    public function up()
    {
        $tableOptions = null;
        $this->createTable('{{%edstatus}}', [
            'id'        => Schema::TYPE_PK,
            'name'      => Schema::TYPE_STRING . ' NOT NULL',
            'descript'  => Schema::TYPE_TEXT,
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%edstatus}}');
    }
}
