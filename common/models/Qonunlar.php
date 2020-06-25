<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "qonunlar".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 */
class Qonunlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'qonunlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address','lang'], 'required'],
            [['name', 'address','lang'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Қонун номи',
            'address' => 'Url манзил',
        ];
    }
}
