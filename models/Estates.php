<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estates".
 *
 * @property int $id
 * @property string|null $callback_date
 * @property string|null $callback_time
 * @property int|null $own_years
 * @property int|null $is_primary
 * @property int|null $rental_price
 * @property int|null $is_occupied
 * @property int|null $can_vacate
 * @property int|null $bedrooms
 * @property int|null $bathrooms
 * @property int|null $needs_repairing
 * @property int|null $renovation_year
 * @property int|null $has_mortgage
 * @property int|null $mortgage_amount
 * @property int|null $has_taxes
 * @property int|null $tax_amount
 * @property int|null $is_only
 * @property string|null $address
 * @property string|null $comment
 * @property int $is_delete
 * @property string $created_at
 * @property string $updated_at
 */
class Estates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['callback_date', 'callback_time', 'created_at', 'updated_at'], 'safe'],
            [['own_years', 'is_primary', 'rental_price', 'is_occupied', 'can_vacate', 'bedrooms', 'bathrooms', 'needs_repairing', 'renovation_year', 'has_mortgage', 'mortgage_amount', 'has_taxes', 'tax_amount', 'is_only', 'is_delete'], 'integer'],
            [['comment'], 'string'],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'callback_date' => 'Callback Date',
            'callback_time' => 'Callback Time',
            'own_years' => 'Own Years',
            'is_primary' => 'Is Primary',
            'rental_price' => 'Rental Price',
            'is_occupied' => 'Is Occupied',
            'can_vacate' => 'Can Vacate',
            'bedrooms' => 'Bedrooms',
            'bathrooms' => 'Bathrooms',
            'needs_repairing' => 'Needs Repairing',
            'renovation_year' => 'Renovation Year',
            'has_mortgage' => 'Has Mortgage',
            'mortgage_amount' => 'Mortgage Amount',
            'has_taxes' => 'Has Taxes',
            'tax_amount' => 'Tax Amount',
            'is_only' => 'Is Only',
            'address' => 'Address',
            'comment' => 'Comment',
            'is_delete' => 'Is Delete',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
