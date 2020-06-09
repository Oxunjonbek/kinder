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
            [['name', 'file'], 'required'],
            [['name'], 'string'],
            [['file'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'file' => 'File',
        ];
    }
}
