<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kelompokpemilih".
 *
 * @property int $id
 * @property string $nama
 * @property int $urutan
 * @property string $kode
 *
 * @property Penguasaanpemilih[] $penguasaanpemilihs
 */
class KelompokPemilih extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelompokpemilih';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'urutan'], 'integer'],
            [['kode'], 'string'],
            [['nama'], 'string', 'max' => 255],
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
            'nama' => 'Nama',
            'urutan' => 'Urutan',
            'kode' => 'Kode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenguasaanpemilihs()
    {
        return $this->hasMany(Penguasaanpemilih::className(), ['kelompokpemilihid' => 'id']);
    }

    /**
     * @inheritdoc
     * @return KelompokPemilihQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KelompokPemilihQuery(get_called_class());
    }
}
