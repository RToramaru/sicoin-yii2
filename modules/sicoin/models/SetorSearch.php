<?php

namespace app\modules\sicoin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sicoin\models\Setor;

/**
 * SetorSearch represents the model behind the search form of `app\modules\sicoin\models\Setor`.
 */
class SetorSearch extends Setor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nome', 'responsavel', 'tipo', 'cnpj'], 'safe'],
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
        $query = Setor::find();

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
        ]);

        $query->andFilterWhere(['ilike', 'nome', $this->nome])
            ->andFilterWhere(['ilike', 'responsavel', $this->responsavel])
            ->andFilterWhere(['ilike', 'tipo', $this->tipo])
            ->andFilterWhere(['ilike', 'cnpj', $this->cnpj]);

        return $dataProvider;
    }
}
