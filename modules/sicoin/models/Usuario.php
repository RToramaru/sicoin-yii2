<?php

namespace app\modules\sicoin\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id Identificador
 * @property string $nome Nome
 * @property string|null $endereco Endereço
 * @property string|null $telefone Telefone
 * @property string $tipo Tipo de acesso
 * @property string $usuario Nome de usuario
 * @property string $senha Senha
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'tipo', 'usuario', 'senha'], 'required'],
            [['nome', 'endereco', 'telefone', 'tipo', 'usuario', 'senha'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Identificador',
            'nome' => 'Nome',
            'endereco' => 'Endereço',
            'telefone' => 'Telefone',
            'tipo' => 'Tipo de acesso',
            'usuario' => 'Nome de usuario',
            'senha' => 'Senha',
        ];
    }

    /**
     * {@inheritdoc}
     * @return UsuarioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuarioQuery(get_called_class());
    }
}
