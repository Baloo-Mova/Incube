<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_163330_form_application_for_the_project extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_163330_form_application_for_the_project cannot be reverted.\n";
//
//        return false;
//    }

    public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('form_application_for_the_project', 
                [
                    'id' => Schema::TYPE_PK,
                    'name_f' => Schema::TYPE_STRING, 
                    'surname' =>  Schema::TYPE_STRING, 
                    'name_s' => Schema::TYPE_STRING,
                    'Adress' => Schema::TYPE_TEXT,
                    'project_name' => Schema::TYPE_STRING,
                    'project_release' => Schema::TYPE_TEXT,
                    'project_goal' => Schema::TYPE_TEXT,
                    'project_result' => Schema::TYPE_TEXT,
                    'date_b' => Schema::TYPE_DATE,
                    'date_e' => Schema::TYPE_DATE,
                    'project_cost' => Schema::TYPE_INTEGER,
                    'project_info' => Schema::TYPE_TEXT,
                    'date_reg_proj' => Schema::TYPE_DATE,



                ],$tableOptions);
        
       //$this->createIndex('parentID', 'Economic_Activities', 'pid');
       // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        //$this->dropIndex('parentID', 'Economic_Activities');
        $this->dropTable('form_application_for_the_project');
    }
}
