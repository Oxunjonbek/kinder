<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bm".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 */
class Bm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address','lang'], 'required'],
            [['name', 'address','lang'], 'string'],
            [['lang'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Карор номи',
            'address' => 'url манзили',
            'lang' => 'Tili',
        ];
    }
}
