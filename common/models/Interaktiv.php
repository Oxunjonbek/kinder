<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "interaktiv".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 */
class Interaktiv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'interaktiv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address','lang'], 'required'],
            [['name', 'address'], 'string', 'max' => 300],
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
            'name' => 'Name',
            'address' => 'Address',
            'lang' => 'Tili',
        ];
    }
}
