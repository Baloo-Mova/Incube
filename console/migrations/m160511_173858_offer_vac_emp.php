<?php

use yii\db\Migration;

use yii\db\Schema;
class m160511_173858_offer_vac_emp extends Migration
{
//    public function up()
//    {
//
//    }
//
//    public function down()
//    {
//        echo "m160511_173858_offer_vac_emp cannot be reverted.\n";
//
//        return false;
//    }

   public function safeUp()
    {
         if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('form_offer_vac_emp', 
                [
                    'id' => Schema::TYPE_PK,
                    'name_org' => Schema::TYPE_STRING, 
                    'info_org' => Schema::TYPE_TEXT,
                    'info_org_s' => Schema::TYPE_TEXT,
                    'type_org' => Schema::TYPE_STRING, 
                    'sector_org' => Schema::TYPE_STRING,
                    'adress' => Schema::TYPE_TEXT,
                    'phone' => Schema::TYPE_STRING,
                    'email' => Schema::TYPE_STRING,
                    'web_site' => Schema::TYPE_STRING,
                    


                ],$tableOptions);
        
        //$this->createIndex('parentID', 'Economic_Activities', 'pid');
       // $this->addForeignKey('ParentIDF', 'Economic_Activities', 'id', 'Economic_Activities', 'pid');
        
        
        
    }

    public function safeDown()
    {
       // $this->dropForeignKey('ParentIDF', 'Economic_Activities');
       // $this->dropIndex('parentID', 'Economic_Activities');
        $this->dropTable('form_offer_vac_emp');
    }
}
