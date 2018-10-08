<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "table_layanan".
 *
 * @property int $id
 * @property string $nama_layanan
 *
 * @property AuthUser[] $authUsers
 * @property TableUrusanlayanan[] $tableUrusanlayanans
 */
class LayananModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'table_layanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_layanan'], 'required'],
            [['nama_layanan'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_layanan' => 'Nama Layanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthUsers()
    {
        return $this->hasMany(UserModel::className(), ['id_layanan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUrusanlayanans()
    {
        return $this->hasMany(UrusanlayananModel::className(), ['id_layanan' => 'id']);
    }


     public function urusan_layanan(){
        return "<center><a href='urusan-layanan/".$this->id."'><span class='fa fa-archive'></span></a></center>";
    }
}