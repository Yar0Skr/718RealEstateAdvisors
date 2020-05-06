<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200505_134802_create_editor
 */
class m200505_134802_create_editor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%info}}', [
            'id' => $this->primaryKey(),
            'header' => $this->string(),
            'short_info' => $this->string(),
            'text' => $this->text(),
            'image' => $this->string(),
            'file' => $this->string(),
            'is_delete'  => $this->integer()
                ->notNull()
                ->defaultValue(0),
            'created_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%info}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200505_134802_create_editor cannot be reverted.\n";

        return false;
    }
    */
}
