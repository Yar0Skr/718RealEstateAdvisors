<?php

use yii\db\Migration;

/**
 * Class m200509_103322_add_field_to_metatags
 */
class m200509_103322_add_field_to_metatags extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('info_metatags','metatag');
        $this->addColumn('info_metatags','name',$this->string());
        $this->addColumn('info_metatags','content',$this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200509_103322_add_field_to_metatags cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200509_103322_add_field_to_metatags cannot be reverted.\n";

        return false;
    }
    */
}
