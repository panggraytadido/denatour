<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Propinsi]].
 *
 * @see Propinsi
 */
class PropinsiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Propinsi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Propinsi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
