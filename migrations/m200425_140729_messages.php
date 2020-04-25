<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200425_140729_messages
 */
class m200425_140729_messages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%messages}}', [
            'id' => $this->primaryKey(),
            'client_name' => $this->string()->notNull(),
            'client_phone' => $this->string()->notNull(),
            'client_mail' => $this->string(),
            'client_address' => $this->string()->notNull(),
            'message' => $this->text(),
            'status_id' => $this->integer(),
            'user_id' => $this->integer()->notNull(),
            'is_delete'  => $this->integer()
                ->notNull()
                ->defaultValue(0),
            'created_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => Schema::TYPE_TIMESTAMP . ' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

        $this->createIndex(
            '{{%idx-users-messages}}',
            '{{%messages}}',
            'user_id'
        );

        $this->addForeignKey(
            '{{%fk-users-messages}}',
            '{{%messages}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            '{{%fk-messages-users}}',
            '{{%messages}}'
        );


        $this->dropIndex(
            '{{%idx-messages-users}}',
            '{{%messages}}'
        );

        $this->dropTable('{{%messages}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200425_140729_messages cannot be reverted.\n";

        return false;
    }
    */
}
