<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penguasaanpemilih".
 *
 * @property int $id
 * @property int $kelompokpemilihid
 * @property int $kecamatanid
 * @property int $jenispenguasaanpemilihid
 * @property int $checklist
 * @property string $createddate
 *
 * @property Kecamatan $kecamatan
 * @property Kelompokpemilih $kelompokpemilih
 * @property Jenispenguasaanpemilih $jenispenguasaanpemilih
 */
class PenguasaanPemilih extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penguasaanpemilih';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'kelompokpemilihid', 'kecamatanid', 'jenispenguasaanpemilihid', 'checklist'], 'integer'],
            [['createddate'], 'safe'],
            [['id'], 'unique'],
            [['kecamatanid'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['kecamatanid' => 'id']],
            [['kelompokpemilihid'], 'exist', 'skipOnError' => true, 'targetClass' => Kelompokpemilih::className(), 'targetAttribute' => ['kelompokpemilihid' => 'id']],
            [['jenispenguasaanpemilihid'], 'exist', 'skipOnError' => true, 'targetClass' => Jenispenguasaanpemilih::className(), 'targetAttribute' => ['jenispenguasaanpemilihid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelompokpemilihid' => 'Kelompokpemilihid',
            'kecamatanid' => 'Kecamatanid',
            'jenispenguasaanpemilihid' => 'Jenispenguasaanpemilihid',
            'checklist' => 'Checklist',
            'createddate' => 'Createddate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['id' => 'kecamatanid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelompokpemilih()
    {
        return $this->hasOne(Kelompokpemilih::className(), ['id' => 'kelompokpemilihid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenispenguasaanpemilih()
    {
        return $this->hasOne(Jenispenguasaanpemilih::className(), ['id' => 'jenispenguasaanpemilihid']);
    }

    /**
     * @inheritdoc
     * @return PenguasaanPemilihQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PenguasaanPemilihQuery(get_called_class());
    }
}
