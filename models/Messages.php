<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property int $id
 * @property string $client_name
 * @property string $client_phone
 * @property string|null $client_mail
 * @property string $client_address
 * @property string|null $message
 * @property int|null $status_id
 * @property int $user_id
 * @property int $is_delete
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Users $user
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_name', 'client_phone', 'client_address'], 'required'],
            [['message'], 'string'],
            [['status_id', 'user_id', 'is_delete'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['client_name', 'client_phone', 'client_mail', 'client_address'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_name' => 'Name',
            'client_phone' => 'Phone',
            'client_mail' => 'Mail',
            'client_address' => 'Address',
            'message' => 'Message',
            'status_id' => 'Status ID',
            'user_id' => 'User ID',
            'is_delete' => 'Is Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
