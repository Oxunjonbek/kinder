<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tarkibiy_structure".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $phone
 */
class TarkibiyStructure extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarkibiy_structure';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'phone'], 'required'],
            [['title'], 'string'],
            [['name'], 'string', 'max' => 300],
            [['phone'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'phone' => 'Phone',
        ];
    }
}