<?php

use yii\db\Migration;
use yii\db\Schema;

class m160511_173240_vacancy extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_173240_vacancy cannot be reverted.\n";
//
//        return false;
//    }

   public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('vacancy', 
                [
                    'id' => Schema::TYPE_PK,
                    'name' => Schema::TYPE_STRING, 
                    'fid' =>  Schema::TYPE_INTEGER, 

                ],$tableOptions);
        
       $this->createIndex('parentID_vacancy_fid', 'vacancy', 'fid');
       //$this->addForeignKey('ParentIDF_vacancy_offer_vac_emp', 'vacancy', 'fid','offer_vac_emp', 'id');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
        $this->dropIndex('parentID_vacancy_fid', 'Economic_Activities');
        $this->dropTable('vacancy');
    }
}
