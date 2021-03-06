<?php

namespace app\modules\sicoin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sicoin\models\Produto;

/**
 * ProdutoSearch represents the model behind the search form of `app\modules\sicoin\models\Produto`.
 */
class ProdutoSearch extends Produto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'unidade_id'], 'integer'],
            [['descricao'], 'safe'],
            [['estoque'], 'number'],
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
        $query = Produto::find();

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
            'estoque' => $this->estoque,
            'unidade_id' => $this->unidade_id,
        ]);

        $query->andFilterWhere(['ilike', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
