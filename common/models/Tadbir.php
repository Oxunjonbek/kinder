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
        public $pdf;
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
            [['title', 'text', 'image','lang'], 'required'],
            [['title', 'text','pdf_name','lang'], 'string'],
            [['image','pdf_name'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 200],
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
