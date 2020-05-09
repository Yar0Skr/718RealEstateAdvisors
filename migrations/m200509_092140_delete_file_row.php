<?php

use yii\db\Migration;

/**
 * Class m200509_092140_delete_file_row
 */
class m200509_092140_delete_file_row extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('info','file');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200509_092140_delete_file_row cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200509_092140_delete_file_row cannot be reverted.\n";

        return false;
    }
    */
}
