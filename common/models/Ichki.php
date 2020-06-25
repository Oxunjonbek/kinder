<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ichki".
 *
 * @property int $id
 * @property string $name
 * @property string $file
 */
class Ichki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $files;
    public static function tableName()
    {
        return 'ichki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'file','lang'], 'required'],
            [['name','lang'], 'string'],
            [['file'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 200],
            [['files'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf,doc']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Хужжат номи',
            'file' => 'Файл',
            'lang' => 'Tili',
        ];
    }
}
