<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201442_tag extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100),
			'tag_name' => $this->string(),
            'tag_cat' => $this->string(),
            'content' => $this->string(),

        ], $tableOptions);


    }

    public function down()
    {
        $this->dropTable('{{%tag}}');
    }
}
