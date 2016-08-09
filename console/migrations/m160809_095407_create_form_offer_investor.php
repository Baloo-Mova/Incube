<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation for table `form_offer_investor`.
 */
class m160809_095407_create_form_offer_investor extends Migration
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
        
        $this->createTable('form_offer_investor', 
                [
                    'id' => Schema::TYPE_PK,
                    'id_author' => Schema::TYPE_INTEGER,
                    'id_publisher' => Schema::TYPE_INTEGER,
                    'investor_name' => Schema::TYPE_STRING,
                    'investor_contacts' => Schema::TYPE_TEXT,
                    'stage_project' => Schema::TYPE_TEXT,
                    'economic_activities' =>  Schema::TYPE_INTEGER,
                    'region' => Schema::TYPE_STRING,
                    'investor_cost' => Schema::TYPE_INTEGER,
                    'duration_project'=>Schema::TYPE_INTEGER,
                    'term_refund'=>  Schema::TYPE_INTEGER,
                    'plan_rent' => Schema::TYPE_STRING,
                    'other' => Schema::TYPE_STRING,
                    'logo' => Schema::TYPE_STRING,
                    'date_create' => Schema::TYPE_DATE,
                    'date_publish' => Schema::TYPE_DATE,
                    'status' => Schema::TYPE_INTEGER,



                ],$tableOptions);
        
        $this->createIndex('parentID_form_offer_investor_economic_activities', 'form_offer_investor', 'economic_activities');
        $this->addForeignKey('ParentIDF_form_offer_investor_Economic_Activities', 'Economic_Activities', 'id', 'form_offer_investor', 'economic_activities');
        
        $this->createIndex('parentID_form_offer_investor_user', 'form_offer_investor', 'user');
        $this->addForeignKey('ParentIDF_form_offer_investor_user', 'user', 'id', 'form_offer_investor', 'id_author');
        $this->addForeignKey('ParentIDF_form_offer_investor_user', 'user', 'id', 'form_offer_investor', 'id_publisher');
        
        
        
    }

    public function safeDown()
    {
        $this->dropForeignKey('ParentIDF_form_offer_investor_Economic_Activities', 'form_offer_investor');
        $this->dropIndex('parentID_form_offer_investor_economic_activities', 'form_offer_investor');
        $this->dropForeignKey('ParentIDF_form_offer_investor_user', 'form_offer_investor');
        $this->dropIndex('parentID_form_offer_investor_user', 'form_offer_investor');
        
        $this->dropTable('form_offer_investor');
    }
    
    
}
