<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "elonlar".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 */
class Elonlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $img;
    public $pdf;
    public static function tableName()
    {
        return 'elonlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'image','lang'], 'required'],
            [['title', 'text','pdf_name'], 'string'],
            [['lang'], 'string', 'max' => 200],
            [['image','pdf_name'], 'string', 'max' => 255],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg,gif,jpeg'],
            [['pdf'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf,doc,txt,xlsx'],
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
            'pdf_name' => 'PDF',
            'lang' => 'Tili',
        ];
    }
}
