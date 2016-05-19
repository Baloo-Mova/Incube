<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_180858_table_cand_vac extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_180858_table_cand_vac cannot be reverted.\n";
//
//        return false;
//    }

    public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('table_cand_vac', 
                [
                    'id' => Schema::TYPE_PK,
                    'vid' =>  Schema::TYPE_INTEGER, 
                    'cid' =>  Schema::TYPE_INTEGER, 

                ],$tableOptions);
        
        $this->createIndex('parentID_table_cand_vac_vacancy', 'table_cand_vac', 'vid');
        $this->createIndex('parentID_table_cand_vac_form_cand_vac_emp', 'table_cand_vac', 'cid');

        // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        $this->dropIndex('parentID_table_cand_vac_vacancy', 'table_cand_vac');
        $this->dropIndex('parentID_table_cand_vac_form_cand_vac_emp', 'table_cand_vac');

        $this->dropTable('table_cand_vac');
    }
}
