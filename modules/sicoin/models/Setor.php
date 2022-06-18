<?php

namespace app\modules\sicoin\models;

use Yii;

/**
 * This is the model class for table "setor".
 *
 * @property int $id Identificador
 * @property string $nome Nome do setor
 * @property string $responsavel Responsável pelo setor
 * @property string $tipo Tipo do Setor
 * @property string|null $cnpj CNPJ
 */
class Setor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'setor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'responsavel', 'tipo'], 'required'],
            [['nome', 'responsavel', 'tipo', 'cnpj'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'nome' => 'Nome do setor',
            'responsavel' => 'Responsável pelo setor',
            'tipo' => 'Tipo do Setor',
            'cnpj' => 'CNPJ',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SetorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SetorQuery(get_called_class());
    }
}
