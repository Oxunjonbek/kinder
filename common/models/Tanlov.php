<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tanlov".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 */
class Tanlov extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $img;
    public static function tableName()
    {
        return 'tanlov';
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
            'title' => 'Title',
            'text' => 'Text',
            'image' => 'Image',
        ];
    }
}
