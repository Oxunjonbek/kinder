<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ariza".
 *
 * @property int $id
 * @property string $name
 * @property string $files
 */
class Ariza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'ariza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'files'], 'required'],
            [['name'], 'string', 'max' => 300],
            [['files'], 'string', 'max' => 255],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf,doc']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ариза номи',
            'files' => 'Файлни танлаг',
        ];
    }
}
