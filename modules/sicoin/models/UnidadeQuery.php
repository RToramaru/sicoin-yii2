<?php

namespace app\modules\sicoin\models;

/**
 * This is the ActiveQuery class for [[Unidade]].
 *
 * @see Unidade
 */
class UnidadeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Unidade[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Unidade|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
