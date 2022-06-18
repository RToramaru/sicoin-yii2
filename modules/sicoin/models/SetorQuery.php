<?php

namespace app\modules\sicoin\models;

/**
 * This is the ActiveQuery class for [[Setor]].
 *
 * @see Setor
 */
class SetorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Setor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Setor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
