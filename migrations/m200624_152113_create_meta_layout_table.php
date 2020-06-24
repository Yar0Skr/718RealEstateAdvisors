<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meta_layout}}`.
 */
class m200624_152113_create_meta_layout_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meta_layout}}', [
            'id' => $this->primaryKey(),
            'page_id' => $this->integer(),
            'name' => $this->string(),
            'content' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meta_layout}}');

    }
}
