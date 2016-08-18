<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `form_offer_project_full`.
 */
class m160818_121302_create_form_offer_project_full extends Migration {

    /**
     * @inheritdoc
     */
    public function safeUp() {
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('form_offer_project_full', [
            'id' => Schema::TYPE_PK,
            'author_id' => Schema::TYPE_INTEGER,
            'publisher_id' => Schema::TYPE_INTEGER,
            'economic_activities_id' => Schema::TYPE_INTEGER,
            'project_manager' => Schema::TYPE_TEXT,
            'project_contacts' => Schema::TYPE_TEXT,
            'phone' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'web_site' =>Schema::TYPE_STRING,
            'project_name' => Schema::TYPE_STRING,
            'project_goal' => Schema::TYPE_TEXT,
            'project_aspects' => Schema::TYPE_TEXT,
            'project_beneficaries' => Schema::TYPE_TEXT,
            'description' => Schema::TYPE_TEXT,
            'project_cost' => Schema::TYPE_INTEGER,
            'project_duration' => Schema::TYPE_STRING,
            'region' => Schema::TYPE_STRING,
            'project_stage' => Schema::TYPE_TEXT,
            'available_funding' => Schema::TYPE_TEXT,
            'other' => Schema::TYPE_TEXT,
            'logo' => Schema::TYPE_STRING,
            'project_files' => Schema::TYPE_STRING,
            'date_create' => Schema::TYPE_DATE,
            'date_publish' => Schema::TYPE_DATE,
            'status' => Schema::TYPE_INTEGER,
                ], $tableOptions);

        $this->createIndex('economic_activities_id', 'form_offer_project_full', 'economic_activities_id');
        $this->createIndex('author_id', 'form_offer_project_full', 'author_id');
        $this->createIndex('publisher_id', 'form_offer_project_full', 'publisher_id');

        $this->addForeignKey("form_offer_project_full_ibfk_1", "form_offer_project_full", "economic_activities_id", "Economic_Activities", "id", "SET NULL", "SET NULL");
        $this->addForeignKey("form_offer_project_full_ibfk_2", "form_offer_project_full", "publisher_id", "user", "id", "SET NULL", "SET NULL");
        $this->addForeignKey("form_offer_project_full_ibfk_3", "form_offer_project_full", "author_id", "user", "id", "SET NULL", "SET NULL");
    }

    public function safeDown() {
        $this->dropForeignKey('form_offer_project_full_ibfk_3', 'form_offer_project_full');
        $this->dropForeignKey('form_offer_project_full_ibfk_2', 'form_offer_project_full');
        $this->dropForeignKey('form_offer_project_full_ibfk_1', 'form_offer_project_full');
        $this->dropTable('form_offer_project_full');
    }

}
