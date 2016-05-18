<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_160834_economic_activities extends Migration
{
	/*
    public function up()
    {

    }

    public function down()
    {
       echo "m160511_160834_economic_activities cannot be reverted.\n";
	   

        return false;
    }

    */
    // Use safeUp/safeDown to run migration code within a transaction
     public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('Economic_Activities', 
                [
                    'id' => Schema::TYPE_PK,
                    'name' => Schema::TYPE_STRING, 
                    'pid' =>  Schema::TYPE_INTEGER, 
                    's_code' => Schema::TYPE_STRING,

                ],$tableOptions);
        
        $this->createIndex('parentID', 'Economic_Activities', 'pid');
        $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
        $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        $this->dropIndex('parentID', 'Economic_Activities');
        $this->dropTable('Economic_Activities');
    }
}
