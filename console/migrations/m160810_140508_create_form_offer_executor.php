<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation for table `form_offer_executor`.
 */
class m160810_140508_create_form_offer_executor extends Migration
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
        
        $this->createTable('form_offer_executor', 
                [
                    'id' => Schema::TYPE_PK,
                    'author_id' => Schema::TYPE_INTEGER,
                    'publisher_id' => Schema::TYPE_INTEGER,
                    'executor_firstname' => Schema::TYPE_STRING,
                    'executor_secondname' => Schema::TYPE_STRING,
                    'date_birth' => Schema::TYPE_DATE,
                    'experience' => Schema::TYPE_TEXT, 
                    'education' => Schema::TYPE_TEXT, 
                    'internship' => Schema::TYPE_TEXT,
                    'participation_projects' => Schema::TYPE_TEXT,
                    'description' => Schema::TYPE_TEXT,
                    'contacts' => Schema::TYPE_TEXT,
                    'other' => Schema::TYPE_TEXT,
                    'logo' => Schema::TYPE_STRING,
                    'file_resume' => Schema::TYPE_STRING,
                    'date_create' => Schema::TYPE_DATE,
                    'date_publish' => Schema::TYPE_DATE,
                    'status' => Schema::TYPE_INTEGER, 
                ],$tableOptions);
        
        
        $this->createIndex('author_id', 'form_offer_executor', 'author_id');
        $this->createIndex('publisher_id', 'form_offer_executor', 'publisher_id');
        
        
        $this->addForeignKey("form_offer_executor_ibfk_1", "form_offer_executor", "author_id", "user", "id", "SET NULL", "SET NULL");
        $this->addForeignKey("form_offer_executor_ibfk_2", "form_offer_executor", "publisher_id", "user", "id", "SET NULL", "SET NULL");
        
        
          
    }

    public function safeDown()
    {
       
        $this->dropForeignKey('form_offer_problem_ibfk_2', 'form_offer_executor'); 
        $this->dropForeignKey('form_offer_problem_ibfk_1', 'form_offer_executor'); 
       
        
        $this->dropTable('form_offer_executor');
    }
}
