<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[JenisPenguasaanPemilih]].
 *
 * @see JenisPenguasaanPemilih
 */
class JenisPenguasaanPemilihQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return JenisPenguasaanPemilih[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return JenisPenguasaanPemilih|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
