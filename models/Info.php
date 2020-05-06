<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string|null $header
 * @property string|null $short_info
 * @property string|null $text
 * @property string|null $image
 * @property string|null $file
 * @property int $is_delete
 * @property string $created_at
 * @property string $updated_at
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['is_delete'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['header', 'short_info', 'image', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'header' => 'Header',
            'short_info' => 'Short Info',
            'text' => 'Text',
            'image' => 'Image',
            'file' => 'File',
            'is_delete' => 'Is Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
