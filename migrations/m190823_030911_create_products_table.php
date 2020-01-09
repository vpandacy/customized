<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m190823_030911_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->comment('产品名'),
            'image' => $this->string()->comment('图片'),
            'status' => $this->tinyInteger(4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
