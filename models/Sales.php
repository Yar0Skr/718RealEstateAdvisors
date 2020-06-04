<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property int $id
 * @property int $estate_id
 * @property int $realtor_id
 * @property float $price
 * @property string $seller_mail
 * @property string $seller_phone
 * @property string $sellet_name
 * @property string $date
 *
 * @property Estates $estate
 * @property Realtor $realtor
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estate_id', 'realtor_id', 'price', 'seller_mail', 'seller_phone', 'sellet_name'], 'required'],
            [['estate_id', 'realtor_id'], 'integer'],
            [['price'], 'number'],
            [['date'], 'safe'],
            [['seller_mail', 'seller_phone', 'sellet_name'], 'string', 'max' => 50],
            [['estate_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estates::className(), 'targetAttribute' => ['estate_id' => 'id']],
            [['realtor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Realtor::className(), 'targetAttribute' => ['realtor_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estate_id' => 'Estate ID',
            'realtor_id' => 'Realtor ID',
            'price' => 'Price',
            'seller_mail' => 'Seller Mail',
            'seller_phone' => 'Seller Phone',
            'sellet_name' => 'Sellet Name',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Estate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstate()
    {
        return $this->hasOne(Estates::className(), ['id' => 'estate_id']);
    }

    /**
     * Gets query for [[Realtor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRealtor()
    {
        return $this->hasOne(Realtor::className(), ['id' => 'realtor_id']);
    }
}
