<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "view_elektabilitas".
 *
 * @property int $kecamatanid
 * @property string $kecamatan
 * @property int $kabupatenid
 * @property string $kabupaten
 * @property int $jenispenguasaanpemilihid
 * @property int $checklist
 * @property string $createddate
 * @property string $kelompokpemilih
 * @property string $jenispenguasaanpemilih
 */
class ViewElektabilitas extends \yii\db\ActiveRecord
{
	public $jumlah;
	
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_elektabilitas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kecamatanid', 'kabupatenid', 'jenispenguasaanpemilihid', 'checklist'], 'integer'],
            [['createddate'], 'safe'],
            [['kecamatan', 'kabupaten', 'kelompokpemilih', 'jenispenguasaanpemilih'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kecamatanid' => 'Kecamatanid',
            'kecamatan' => 'Kecamatan',
            'kabupatenid' => 'Kabupatenid',
            'kabupaten' => 'Kabupaten',
            'jenispenguasaanpemilihid' => 'Jenispenguasaanpemilihid',
            'checklist' => 'Checklist',
            'createddate' => 'Createddate',
            'kelompokpemilih' => 'Kelompokpemilih',
            'jenispenguasaanpemilih' => 'Jenispenguasaanpemilih',
        ];
    }
	
	public function penguasaanPemilih($kecamatanId,$jenisPenguasaanpemilihId,$kelompokPemilihId)
	{
		$sql = 'SELECT count(*) as jumlah FROM view_elektabilitas where kecamatanid=:kecamatanId AND jenispenguasaanpemilihid=:jenisPenguasaanpemilihId AND kelompokpemilihid=:kelompokPemilihId';
		$getSudahDikuasasi = ViewElektabilitas::findBySql($sql,
			[
				':kecamatanId' => $kecamatanId,
				':jenisPenguasaanpemilihId' => $jenisPenguasaanpemilihId,
				':kelompokPemilihId' => $kelompokPemilihId,
			])->one();
			
		return $getSudahDikuasasi["jumlah"];		
	}
	
	public function getTotalPenguasaanPemilih($kecamatanId,$jenisPenguasaanpemilihId)
	{
		$sql = 'SELECT count(*) as jumlah FROM view_elektabilitas where kecamatanid=:kecamatanId AND jenispenguasaanpemilihid=:jenisPenguasaanpemilihId';
		$getSudahDikuasasi = ViewElektabilitas::findBySql($sql,
			[
				':kecamatanId' => $kecamatanId,
				':jenisPenguasaanpemilihId' => $jenisPenguasaanpemilihId,				
			])->one();
			
		return $getSudahDikuasasi["jumlah"];		
	}
	
	

    /**
     * @inheritdoc
     * @return ViewElektabilitasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ViewElektabilitasQuery(get_called_class());
    }
}
