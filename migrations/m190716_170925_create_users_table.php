<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m190716_170925_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username'=>$this->string(),
            'email'=>$this->string()->defaultValue(null),
            'password'=>$this->string(),
            'salt'=>$this->integer()->defaultValue(0),
            'profile'=>$this->string()->defaultValue(null)
        ]);
    }
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
