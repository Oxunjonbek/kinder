<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "farmonlar".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 */
class Farmonlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'farmonlar';
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
            'name' => 'Фармон номи',
            'address' => 'url manzili',
        ];
    }
}
