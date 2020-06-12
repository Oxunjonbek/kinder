<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tarkibiy_structure".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $phone
 */
class TarkibiyStructure extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $img;
    public static function tableName()
    {
        return 'tarkibiy_structure';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'phone'], 'required'],
            [['title'], 'string'],
            [['name'], 'string', 'max' => 300],
            [['phone','image'], 'string', 'max' => 255],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg,gif,jpeg'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Лавозими',
            'name' => 'Ф.И.О',
            'phone' => 'Телефон',
        ];
    }
}
