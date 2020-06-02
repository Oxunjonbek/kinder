<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "genel".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $phone
 * @property string $image
 */
class Genel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $img;
    public static function tableName()
    {
        return 'genel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'phone', 'image'], 'required'],
            [['title'], 'string'],
            [['name'], 'string', 'max' => 400],
            [['phone', 'image'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'phone' => 'Phone',
            'image' => 'Image',
        ];
    }
}
