<?php

use yii\db\Migration;

/**
 * Class m200611_152135_add_fields_to_info
 */
class m200611_152135_add_fields_to_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('info','alt_tag',$this->string());
        $this->addColumn('info','read_time',$this->string());
        $this->addColumn('info','author',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200611_152135_add_fields_to_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200611_152135_add_fields_to_info cannot be reverted.\n";

        return false;
    }
    */
}
