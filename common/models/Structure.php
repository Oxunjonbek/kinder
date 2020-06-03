<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "structure".
 *
 * @property int $id
 * @property string $name
 * @property string $prof
 * @property string $phone
 */
class Structure extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $img;
    public static function tableName()
    {
        return 'structure';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'prof', 'phone'], 'required'],
            [['name'], 'string', 'max' => 300],
            [['prof', 'phone','image'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'prof' => 'Prof',
            'phone' => 'Phone',
        ];
    }
}
