<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name 产品名
 * @property string $image 图片
 * @property int $status
 * @property int $type
 */
class Products extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status','type'], 'integer'],

            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],

            [['name'], 'string', 'max' => 100],
            ['image', 'string', 'max' => 255],
            [['image', 'name'], 'required']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '产品名',
            'image' => '图片',
            'status' => '状态',
            'type'=>'类型'
        ];
    }

    public function getImage(){
        $this->image = Html::img($this->image);
        return $this->image;
    }
}
