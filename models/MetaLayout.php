<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta_layout".
 *
 * @property int $id
 * @property int|null $page_id
 * @property string|null $name
 * @property string|null $content
 */
class MetaLayout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meta_layout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id'], 'integer'],
            [['name', 'content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'name' => 'Name',
            'content' => 'Content',
        ];
    }
}
