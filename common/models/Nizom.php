<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "nizom".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $image
 */
class Nizom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nizom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text','lang'], 'required'],
            [['title', 'text','lang'], 'string'],
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
            'text' => 'Tекст',
            'lang' => 'Tili',
        ];
    }
}
