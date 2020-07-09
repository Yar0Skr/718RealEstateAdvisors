<?php

use yii\db\Migration;

/**
 * Class m200709_142211_add_title_field_to_layout
 */
class m200709_142211_create_layout_title_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%layout_title}}', [
            'id' => $this->primaryKey(),
            'page_id' => $this->integer(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%layout_title}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200709_142211_add_title_field_to_layout cannot be reverted.\n";

        return false;
    }
    */
}
