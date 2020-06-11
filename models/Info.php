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
 * @property int $is_delete
 * @property string $created_at
 * @property string $updated_at
 * @property int|null $order_number
 * @property string|null $url_name
 * @property string|null $alt_tag
 * @property string|null $read_time
 * @property string|null $author
 *
 * @property InfoImages[] $infoImages
 * @property InfoMetatags[] $infoMetatags
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
            [['is_delete', 'order_number'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['header', 'short_info', 'image', 'url_name', 'alt_tag', 'read_time', 'author'], 'string', 'max' => 255],
            [['url_name'], 'unique'],
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
            'is_delete' => 'Is Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'order_number' => 'Order Number',
            'url_name' => 'Url Name',
            'alt_tag' => 'Alt Tag',
            'read_time' => 'Read Time',
            'author' => 'Author',
        ];
    }

    /**
     * Gets query for [[InfoImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfoImages()
    {
        return $this->hasMany(InfoImages::className(), ['info_id' => 'id']);
    }

    /**
     * Gets query for [[InfoMetatags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfoMetatags()
    {
        return $this->hasMany(InfoMetatags::className(), ['info_id' => 'id']);
    }
}
