<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%girls}}`.
 */
class m190717_101815_create_girls_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%girls}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'age' => $this->integer(255)->notNull(),
            'sex' => $this->string(100)->notNull(),
            'weigt' => $this->integer()->defaultValue(18),
            'height' => $this->integer()->defaultValue(null),
            'status' => $this->string(255)->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%girls}}');
    }
}
