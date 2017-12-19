<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[ViewElektabilitas]].
 *
 * @see ViewElektabilitas
 */
class ViewElektabilitasQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ViewElektabilitas[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ViewElektabilitas|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
