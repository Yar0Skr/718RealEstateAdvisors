<?php

use yii\db\Migration;

/**
 * Class m200604_143956_add_unique_field_to_editor
 */
class m200604_143956_add_unique_field_to_editor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('info','url_name',$this->string()->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200604_143956_add_unique_field_to_editor cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200604_143956_add_unique_field_to_editor cannot be reverted.\n";

        return false;
    }
    */
}
