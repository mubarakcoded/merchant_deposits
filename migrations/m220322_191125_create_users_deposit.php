<?php

use yii\db\Migration;

/**
 * Class m220322_191125_create_users_deposit
 */
class m220322_191125_create_users_deposit extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users_deposit', [
            'id' => $this->primaryKey(),
            'amount' => $this->double(),
            'reason' => $this->string(),
            'deposited_on' => $this->dateTime()->defaultValue(date('Y-m-d H:i:s'))
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m220322_191125_create_users_deposit cannot be reverted.\n";

        // return false;
        $this->dropTable('users_deposit');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220322_191125_create_users_deposit cannot be reverted.\n";

        return false;
    }
    */
}
