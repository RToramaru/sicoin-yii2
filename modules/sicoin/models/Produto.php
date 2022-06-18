<?php

namespace app\modules\sicoin\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id Identificador
 * @property string $descricao Descrição do produto
 * @property float $estoque Quantidade em estoque
 * @property int $unidade_id Sistema de unidade
 *
 * @property Unidade $unidade
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'estoque', 'unidade_id'], 'required'],
            [['descricao'], 'string'],
            [['estoque'], 'number', 'min'=>0],
            [['unidade_id'], 'default', 'value' => null],
            [['unidade_id'], 'integer'],
            [['unidade_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unidade::className(), 'targetAttribute' => ['unidade_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'descricao' => 'Descrição do produto',
            'estoque' => 'Quantidade em estoque',
            'unidade_id' => 'Sistema de unidade',
        ];
    }

    /**
     * Gets query for [[Unidade]].
     *
     * @return \yii\db\ActiveQuery|UnidadeQuery
     */
    public function getUnidade()
    {
        return $this->hasOne(Unidade::className(), ['id' => 'unidade_id']);
    }

    /**
     * {@inheritdoc}
     * @return ProdutoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProdutoQuery(get_called_class());
    }
}
