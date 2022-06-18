<?php

namespace app\modules\sicoin\models;

use Yii;

/**
 * This is the model class for table "unidade".
 *
 * @property int $id Identificador
 * @property string $tipo Tipo de unidade
 *
 * @property Produto[] $produtos
 */
class Unidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo'], 'required'],
            [['tipo'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'tipo' => 'Tipo de unidade',
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery|ProdutoQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['unidade_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UnidadeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UnidadeQuery(get_called_class());
    }
}
