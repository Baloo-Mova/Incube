<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_182923_performer_project extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_182923_performer_project cannot be reverted.\n";
//
//        return false;
//    }

    public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('performer_project', 
                [
                    'id' => Schema::TYPE_PK,
                    'name' => Schema::TYPE_STRING, 
                    'adress' => Schema::TYPE_TEXT,
                    'ipid' => Schema::TYPE_INTEGER,

                    


                ],$tableOptions);
        
        $this->createIndex('parentID_performer_project', 'performer_project', 'ipid');
       // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        $this->dropIndex('parentID_performer_project', 'performer_project');
        $this->dropTable('performer_project');
    }
}
