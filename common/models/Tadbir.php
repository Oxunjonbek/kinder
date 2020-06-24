<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tadbir".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 */
class Tadbir extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
        public $img;
    public static function tableName()
    {
        return 'tadbir';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'image'], 'required'],
            [['title', 'text'], 'string'],
            [['image'], 'string', 'max' => 255],
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
            'title' => 'Сарлавҳа',
            'text' => 'Текст',
            'image' => 'Расм',
        ];
    }
}
