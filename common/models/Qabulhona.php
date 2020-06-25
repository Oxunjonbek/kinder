<?php

namespace common\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "qabulhona".
 *
 * @property int $id
 * @property string $name
 * @property int $viloyat_id
 * @property string $tuman
 * @property string $manzil
 * @property string $email
 * @property string $phone
 * @property int $jins
 * @property string $birth_day
 * @property int $maqom
 * @property int $murojaat_type
 * @property string $file
 * @property string $murojaat_text
 * @property int $tasqidlash
 */
class Qabulhona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $verifyCode;
    public $files;
    public static function tableName()
    {
        return 'qabulhona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'viloyat_id', 'tuman', 'manzil', 'email', 'phone', 'jins', 'birth_day', 'maqom', 'murojaat_type', 'file', 'murojaat_text', 'tasqidlash'], 'required'],
            [['viloyat_id', 'jins', 'maqom', 'murojaat_type', 'tasqidlash'], 'integer'],
            [['murojaat_text','lang'], 'string'],
            [['name', 'tuman', 'manzil', 'email'], 'string', 'max' => 300],
            [['phone', 'birth_day', 'file'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 200],
            [['files'], 'file', 'skipOnEmpty' => true, 'extensions' => 'pdf,doc,ex'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ф.И.О ',
            'viloyat_id' => 'Ҳудуд',
            'tuman' => 'Туман (шаҳар) ',
            'manzil' => 'Манзил',
            'email' => 'Электрон почта',
            'phone' => 'Телефон',
            'jins' => 'Жинс ',
            'birth_day' => 'Туғилган йилингиз ',
            'maqom' => 'Мақом',
            'murojaat_type' => 'Мурожаат тури ',
            'file' => 'Файл юклаш',
            'files' => 'Файл юклаш',
            'murojaat_text' => 'Мурожаат матни ',
            'tasqidlash' => 'Оммавий офертани тасдиқлаш',
            'verifyCode' => 'Кодни киритинг',
            'lang' => 'Tili',
        ];
    }
}
