<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_metatags".
 *
 * @property int $id
 * @property int $info_id
 * @property string|null $name
 * @property string|null $content
 *
 * @property Info $info
 */
class InfoMetatags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_metatags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info_id'], 'required'],
            [['info_id'], 'integer'],
            [['name', 'content'], 'string', 'max' => 255],
            [['info_id'], 'exist', 'skipOnError' => true, 'targetClass' => Info::className(), 'targetAttribute' => ['info_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'info_id' => 'Info ID',
            'name' => 'Name',
            'content' => 'Content',
        ];
    }

    /**
     * Gets query for [[Info]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfo()
    {
        return $this->hasOne(Info::className(), ['id' => 'info_id']);
    }
}
