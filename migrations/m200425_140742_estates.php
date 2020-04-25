<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200425_140742_estates
 */
class m200425_140742_estates extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%estates}}', [
            'id' => $this->primaryKey(),
            'callback_date' => $this->date(),
            'callback_time' => $this->time(),
            'own_years' => $this->integer(),
            'is_primary' => $this->integer(),
            'rental_price' => $this->integer(),
            'is_occupied' => $this->integer(),
            'can_vacate' => $this->integer(),
            'bedrooms' => $this->integer(),
            'bathrooms' => $this->integer(),
            'needs_repairing' => $this->integer(),
            'renovation_year' => $this->integer(),
            'has_mortgage' => $this->integer(),
            'mortgage_amount' => $this->integer(),
            'has_taxes' => $this->integer(),
            'tax_amount' => $this->integer(),
            'is_only' => $this->integer(),
            'address' => $this->string(),
            'comment' => $this->text(),
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
        $this->dropTable('{{%estates}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200425_140742_estates cannot be reverted.\n";

        return false;
    }
    */
}
