<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%info_metatags}}`.
 */
class m200509_092410_create_info_metatags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%info_metatags}}', [
            'id' => $this->primaryKey(),
            'info_id' => $this->integer()->notNull(),
            'metatag' => $this->string(),
        ]);

        $this->createIndex(
            '{{%idx-info_metatags-info_id}}', //название подключения (любое)
            '{{%info_metatags}}', //текущая таблица
            'info_id' //строка со внешним ключом
        );
        // Добавить вторичный ключ
        $this->addForeignKey(
            '{{%fk-info_metatags-info_id}}', //название связи (любое)
            '{{%info_metatags}}', //главная таблица
            'info_id', //строка в текущей таблице со внешним ключом
            '{{%info}}', //таблица со внешним ключом
            'id', //колонка во второй таблице
            'CASCADE' //метод при удалении
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            '{{%fk-info_metatags-info_id}}',
            '{{%info_metatags}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-info_metatags-info_id}}',
            '{{%info_metatags}}'
        );

        $this->dropTable('{{%info_metatags}}');
    }
}
