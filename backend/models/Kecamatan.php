<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property int $kabupatenid
 *
 * @property Kabupaten $kabupaten
 * @property Penguasaanpemilih[] $penguasaanpemilihs
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'kabupatenid'], 'integer'],
            [['kode', 'nama'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['kabupatenid'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['kabupatenid' => 'id']],
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
            'kabupatenid' => 'Kabupatenid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['id' => 'kabupatenid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenguasaanpemilihs()
    {
        return $this->hasMany(Penguasaanpemilih::className(), ['kecamatanid' => 'id']);
    }

    /**
     * @inheritdoc
     * @return KecamatanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KecamatanQuery(get_called_class());
    }
}
