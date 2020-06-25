<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mtt".
 *
 * @property int $id
 * @property string $name
 * @property string $prof
 * @property string $phone
 * @property string $address
 */
class Mtt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mtt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'prof', 'phone', 'address','lang'], 'required'],
            [['name', 'prof', 'phone', 'address'], 'string', 'max' => 300],
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
            'name' => 'МТТ',
            'prof' => 'Мудира',
            'phone' => 'Телефон',
            'address' => 'Манзил',
            'lang' => 'Tili',
        ];
    }
}
