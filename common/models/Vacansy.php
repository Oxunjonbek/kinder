<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vacansy".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $salary
 */
class Vacansy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vacansy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'salary','lang'], 'required'],
            [['title','lang'], 'string'],
            [['salary'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Бўш иш номи',
            'title' => 'Изоҳ',
            'salary' => 'Бўш иш сони',
            'lang' => 'Tili',
        ];
    }
}
