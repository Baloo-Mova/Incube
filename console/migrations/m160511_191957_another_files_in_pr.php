<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_191957_another_files_in_pr extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_191957_another_files_in_pr cannot be reverted.\n";
//
//        return false;
//    }

     public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('another_files_in_pr', 
                [
                    'id' => Schema::TYPE_PK,
                    'name' => Schema::TYPE_STRING,
                    'in_pr_id' => Schema::TYPE_INTEGER,

                    


                ],$tableOptions);
        
        $this->createIndex('parentID_another_files_in_pr', 'another_files_in_pr', 'in_pr_id');
       // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        $this->dropIndex('parentID_another_files_in_pr', 'another_files_in_pr');
        $this->dropTable('another_files_in_pr');
    }
}
