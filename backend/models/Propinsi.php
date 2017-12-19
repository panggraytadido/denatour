<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "propinsi".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 *
 * @property Kabupaten[] $kabupatens
 */
class Propinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'propinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama'], 'string'],
            [['kode'], 'string', 'max' => 255],
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
    public function getKabupatens()
    {
        return $this->hasMany(Kabupaten::className(), ['propinsiid' => 'id']);
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
