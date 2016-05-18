<?php

use yii\db\Migration;
use yii\db\Schema;


class m160511_170702_form_offer_project extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_170702_form_offer_project cannot be reverted.\n";
//
//        return false;
//    }

     public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('form_offer_project', 
                [
                    'id' => Schema::TYPE_PK,
                    'project_name' => Schema::TYPE_STRING,
                    'project_goal' => Schema::TYPE_TEXT,
                    'project_aspects' => Schema::TYPE_TEXT,
                    'adress' => Schema::TYPE_TEXT,
                    'phone' => Schema::TYPE_STRING,
                    'email' => Schema::TYPE_STRING,
                    'web_site' => Schema::TYPE_STRING,
                    'incube_help' => Schema::TYPE_TEXT,
                    'economic_activities' =>  Schema::TYPE_INTEGER,
                    'region' => Schema::TYPE_STRING,
                    'stage_work' => Schema::TYPE_STRING,
                    'project_cost' => Schema::TYPE_INTEGER,
                    'available_funding' => Schema::TYPE_STRING,
                    'country' => Schema::TYPE_STRING,
                    'date_b' => Schema::TYPE_DATE,
                    'date_e' => Schema::TYPE_DATE,
                    



                ],$tableOptions);
        
        $this->createIndex('parentID_form_offer_project_economic_activities', 'form_offer_project', 'economic_activities');
        $this->addForeignKey('ParentIDF_form_offer_project_Economic_Activities', 'Economic_Activities', 'id', 'form_offer_project', 'economic_activities');
        
        
        
    }

    public function safeDown()
    {
        $this->dropForeignKey('ParentIDF_form_offer_project_Economic_Activities', 'form_offer_project');
        $this->dropIndex('parentID_form_offer_project_economic_activities', 'form_offer_project');
        $this->dropTable('form_offer_project');
    }
}
