<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190823_032117_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username'=>$this->string(100),
            'auth_key'=>$this->string()->comment('相当于sessionid来获取用户'),
            'password_hash'=>$this->string()->comment('加密后的密码'),
            'created_at'=>$this->string(),
            'updated_at'=>$this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
