<?php

use yii\db\Migration;

/**
 * Class m200525_122456_add_listNumber_field_to_info
 */
class m200525_122456_add_listNumber_field_to_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('info','order_number',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200525_122456_add_listNumber_field_to_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200525_122456_add_listNumber_field_to_info cannot be reverted.\n";

        return false;
    }
    */
}
