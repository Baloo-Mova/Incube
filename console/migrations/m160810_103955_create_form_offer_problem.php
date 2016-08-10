<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation for table `form_offer_problem`.
 */
class m160810_103955_create_form_offer_problem extends Migration
{
    /**
     * @inheritdoc
     */
   public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('form_offer_problem', 
                [
                    'id' => Schema::TYPE_PK,
                    'author_id' => Schema::TYPE_INTEGER,
                    'publisher_id' => Schema::TYPE_INTEGER,
                    'economic_activities_id' =>  Schema::TYPE_INTEGER,
                    'problem_name' => Schema::TYPE_STRING,
                    'problem_description' => Schema::TYPE_TEXT, 
                    'region' => Schema::TYPE_STRING,
                    'other' => Schema::TYPE_TEXT,
                    'logo' => Schema::TYPE_STRING,
                    'date_create' => Schema::TYPE_DATE,
                    'date_publish' => Schema::TYPE_DATE,
                    'status' => Schema::TYPE_INTEGER, 
                ],$tableOptions);
        
        
        $this->createIndex('author_id', 'form_offer_problem', 'author_id');
        $this->createIndex('publisher_id', 'form_offer_problem', 'publisher_id');
        $this->createIndex('economic_activities_id', 'form_offer_problem', 'economic_activities_id');
        
        $this->addForeignKey("form_offer_problem_ibfk_1", "form_offer_problem", "author_id", "user", "id", "SET NULL", "SET NULL");
        $this->addForeignKey("form_offer_problem_ibfk_2", "form_offer_problem", "publisher_id", "user", "id", "SET NULL", "SET NULL");
        $this->addForeignKey("form_offer_problem_ibfk_3", "form_offer_problem", "economic_activities_id", "Economic_Activities", "id", "SET NULL", "SET NULL");
        
          
    }

    public function safeDown()
    {
        $this->dropForeignKey("form_offer_problem_ibfk_3","form_offer_problem");
        $this->dropForeignKey('form_offer_problem_ibfk_2', 'form_offer_problem'); 
        $this->dropForeignKey('form_offer_problem_ibfk_1', 'form_offer_problem'); 
       
        
        $this->dropTable('form_offer_problem');
    }
}
