<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_183952_char_in_pr extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_183952_char_in_pr cannot be reverted.\n";
//
//        return false;
//    }

    public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('char_in_pr', 
                [
                    'id' => Schema::TYPE_PK,
                    'name' => Schema::TYPE_STRING,
                    'type' => Schema::TYPE_STRING,
                    'st_level' => Schema::TYPE_STRING,
                    'newness' => Schema::TYPE_STRING,
                    'nat_imp' => Schema::TYPE_STRING,
                    'result' => Schema::TYPE_TEXT,
                    'ipid' => Schema::TYPE_INTEGER,

                    


                ],$tableOptions);
        
        $this->createIndex('parentID_char_in_pr', 'char_in_pr', 'ipid');
       // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        $this->dropIndex('parentID_char_in_pr', 'char_in_pr');
        $this->dropTable('char_in_pr');
    }
}
