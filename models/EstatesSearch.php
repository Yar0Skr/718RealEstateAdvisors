<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Estates;

/**
 * EstatesSearch represents the model behind the search form of `app\models\Estates`.
 */
class EstatesSearch extends Estates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'own_years', 'is_primary', 'rental_price', 'is_occupied', 'can_vacate', 'bedrooms', 'bathrooms', 'needs_repairing', 'renovation_year', 'has_mortgage', 'mortgage_amount', 'has_taxes', 'tax_amount', 'is_only', 'is_delete'], 'integer'],
            [['callback_date', 'callback_time', 'address', 'comment', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Estates::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'callback_date' => $this->callback_date,
            'callback_time' => $this->callback_time,
            'own_years' => $this->own_years,
            'is_primary' => $this->is_primary,
            'rental_price' => $this->rental_price,
            'is_occupied' => $this->is_occupied,
            'can_vacate' => $this->can_vacate,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'needs_repairing' => $this->needs_repairing,
            'renovation_year' => $this->renovation_year,
            'has_mortgage' => $this->has_mortgage,
            'mortgage_amount' => $this->mortgage_amount,
            'has_taxes' => $this->has_taxes,
            'tax_amount' => $this->tax_amount,
            'is_only' => $this->is_only,
            'is_delete' => $this->is_delete,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
