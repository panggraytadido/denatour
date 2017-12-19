<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PenguasaanPemilih]].
 *
 * @see PenguasaanPemilih
 */
class PenguasaanPemilihQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return PenguasaanPemilih[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PenguasaanPemilih|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
