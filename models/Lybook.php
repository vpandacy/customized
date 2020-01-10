<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lybook".
 *
 * @property int $id
 * @property string $name 姓名
 * @property string $mobile 手机号
 * @property string $email 邮箱
 * @property string $content 留言内容
 * @property int $status 状态5删除10整除
 * @property string $created_time 创建时间
 * @property string $updated_time 修改时间
 */
class Lybook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lybook';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_time', 'updated_time'], 'required'],
            [['created_time', 'updated_time'], 'safe'],
            [['name'], 'string', 'max' => 42],
            [['mobile', 'email'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'mobile' => '手机',
            'email' => '邮箱',
            'content' => '内容',
            'status' => '状态',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
        ];
    }

    public function getBegining()
    {
        $tmpStr = strip_tags($this->content);
        $tmpLen = strlen($tmpStr);
        return mb_substr($tmpStr, 0, 30) . (($tmpLen > 20) ? "..." : "");
    }
}
