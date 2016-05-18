<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_190304_form_orfer_in_pr extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_190304_form_orfer_in_pr cannot be reverted.\n";
//
//        return false;
//    }

    public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('form_order_in_pr', 
                [
                    'id' => Schema::TYPE_PK,
                    'name' => Schema::TYPE_STRING,
                    'in_direction' => Schema::TYPE_STRING,
                    'patents' => Schema::TYPE_TEXT,
                    'date_b' => Schema::TYPE_DATE,
                    'date_e' => Schema::TYPE_DATE,
                    'cost_period' => Schema::TYPE_STRING,
                    'key_perf_ind' => Schema::TYPE_TEXT,
                    'key_market' => Schema::TYPE_TEXT,
                    'coast' => Schema::TYPE_INTEGER,
                    'coast_direction' => Schema::TYPE_TEXT,
                    'tax_coast_direction' => Schema::TYPE_TEXT,
                    'info_spec' => Schema::TYPE_TEXT,
                    'rating_effective' => Schema::TYPE_TEXT,
                    'another_effects' => Schema::TYPE_TEXT,
                

                    


                ],$tableOptions);
        
        //$this->createIndex('parentID_orfer_in_pr', 'orfer_in_pr', 'ipid');
       // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
      //  $this->dropIndex('parentID_orfer_in_pr', 'orfer_in_pr');
        $this->dropTable('form_order_in_pr');
    }
}
