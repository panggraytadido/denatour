<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property int $propinsiid
 *
 * @property Propinsi $propinsi
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'propinsiid'], 'integer'],
            [['kode', 'nama'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['propinsiid'], 'exist', 'skipOnError' => true, 'targetClass' => Propinsi::className(), 'targetAttribute' => ['propinsiid' => 'id']],
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
            'propinsiid' => 'Propinsiid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropinsi()
    {
        return $this->hasOne(Propinsi::className(), ['id' => 'propinsiid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['kabupatenid' => 'id']);
    }

    /**
     * @inheritdoc
     * @return KabupatenQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KabupatenQuery(get_called_class());
    }
}
