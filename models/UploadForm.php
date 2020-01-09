<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile1;
    /**
     * @var UploadedFile
     */
    public $imageFile2;

    public function rules()
    {
        return [
            [['imageFile1','imageFile2'], 'file','extensions' => 'png, jpg','maxFiles' => 2],
        ];
    }
    public function attributeLabels()
    {
        return [
            'imageFile'=>'文件上传',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile1->saveAs('/web/image/' . $this->imageFile1->baseName . '.' . $this->imageFile1->extension);
            $this->imageFile2->saveAs('/web/image/' . $this->imageFile2->baseName . '.' . $this->imageFile2->extension);
            var_dump('上传成功');die;
            return true;
        } else {
            return false;
        }
    }
}