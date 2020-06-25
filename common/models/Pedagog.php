<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pedagog".
 *
 * @property int $id
 * @property string $name
 * @property string $prof
 */
class Pedagog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedagog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'prof'], 'required'],
            [['name', 'prof'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Хужжат Номи',
            'prof' => 'Мавзуси',
        ];
    }
}
