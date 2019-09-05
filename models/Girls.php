<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "girls".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $age
 * @property string $sex
 * @property int $weigt
 * @property int $height
 * @property string $status
 * @property string $file
 */
class Girls extends \yii\db\ActiveRecord
{

    /**
     * @var UploadedFile file
     */
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'girls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
                [['name', 'description', 'age', 'sex'], 'required'],
                [['name', 'description'], 'string'],
                [['age', 'weigt', 'height'], 'integer'],
                [['sex'], 'string', 'max' => 100],
                [['status'], 'string', 'max' => 255],
                [['file'], 'string', 'max' => 255],
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
                'description' => 'Description',
                'age' => 'Age',
                'sex' => 'Sex',
                'weigt' => 'Weigt',
                'height' => 'Height',
                'status' => 'Status',
        ];
    }

    public function uploadFile(UploadedFile $file)
    {

        $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);
        $file->saveAs(Yii::getAlias('@webroot').'/uploads/'.$filename);
        $this->file = "saasasa";
        $this->save(false);
        return $filename;
    }
}
