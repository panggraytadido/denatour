<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[KelompokPemilih]].
 *
 * @see KelompokPemilih
 */
class KelompokPemilihQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return KelompokPemilih[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return KelompokPemilih|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
