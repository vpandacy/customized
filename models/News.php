<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title 标题
 * @property string $image 图片
 * @property string $brief 概述
 * @property string $content 内容
 * @property string $author 作者
 * @property string $source 新闻类型
 * @property string $keywords 关键词
 * @property string $description 描述
 * @property string $created_time
 * @property string $updated_time
 * @property int $write_at
 * @property int $status
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const STATUS_USING = 5;

    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';

    public static function tableName()
    {
        return 'news';
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE] = ['title', 'image', 'status', 'created_at',
            'updated_at', 'brief', 'content', 'author', 'source', 'keywords', 'description', 'write_at'];
        $scenarios[self::SCENARIO_UPDATE] = ['title', 'image', 'status', 'created_at',
            'updated_at', 'brief', 'content', 'author', 'source', 'keywords', 'description', 'write_at'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'integer'],

            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED, self::STATUS_USING]],

            [['title', 'image', 'brief', 'source', 'keywords', 'description'], 'string', 'max' => 255],
            [['title', 'image', 'brief', 'source', 'keywords', 'description'], 'required'],
            [['author'], 'string', 'max' => 20],

            [['created_at', 'updated_at'], 'default', 'value' => date('Y-m-d H:i:s'), 'on' => 'create'],

            [['updated_at'], 'default', 'value' => date('Y-m-d H:i:s'), 'on' => 'update']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '题目',
            'image' => '图片',
            'brief' => '概述',
            'content' => '内容',
            'author' => '作者',
            'source' => '新闻类型',
            'keywords' => '关键词',
            'description' => '描述',
            'write_at' => '年份',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'status' => '状态',
        ];
    }

    public function getStatus($status)
    {
        $status_arr = [
            News::STATUS_ACTIVE => '未在使用',
            News::STATUS_USING =>  '正在使用',
            News::STATUS_DELETED =>  '已删除'
        ];
        if (array_key_exists($status, $status_arr)) {
            return $status_arr[$this->status];
        } else {
            return ('未确认');
        }
    }

    public function getImage(){
        $this->image = Html::img($this->image);
        return $this->image;
    }

}
