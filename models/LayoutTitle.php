<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "layout_title".
 *
 * @property int $id
 * @property int|null $page_id
 * @property string|null $title
 */
class LayoutTitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'layout_title';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
        ];
    }
}
