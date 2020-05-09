<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%info_images}}`.
 */
class m200509_092358_create_info_images_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%info_images}}', [
            'id' => $this->primaryKey(),
            'info_id' => $this->integer()->notNull(),
            'image' => $this->string(),
        ]);

        $this->createIndex(
            '{{%idx-info_images-info_id}}', //название подключения (любое)
            '{{%info_images}}', //текущая таблица
            'info_id' //строка со внешним ключом
        );
        // Добавить вторичный ключ
        $this->addForeignKey(
            '{{%fk-info_images-info_id}}', //название связи (любое)
            '{{%info_images}}', //главная таблица
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
            '{{%fk-info_images-info_id}}',
            '{{%info_images}}'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            '{{%idx-info_images-info_id}}',
            '{{%info_images}}'
        );

        $this->dropTable('{{%info_images}}');
    }
}
