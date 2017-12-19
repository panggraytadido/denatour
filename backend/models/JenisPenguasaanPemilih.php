<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenispenguasaanpemilih".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 *
 * @property Penguasaanpemilih[] $penguasaanpemilihs
 */
class JenisPenguasaanPemilih extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenispenguasaanpemilih';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['kode', 'nama'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenguasaanpemilihs()
    {
        return $this->hasMany(Penguasaanpemilih::className(), ['jenispenguasaanpemilihid' => 'id']);
    }

    /**
     * @inheritdoc
     * @return JenisPenguasaanPemilihQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisPenguasaanPemilihQuery(get_called_class());
    }
}
