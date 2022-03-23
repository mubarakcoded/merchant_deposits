<?php

use yii\db\Migration;

/**
 * Class m220322_191903_seed_deposits_table
 */
class m220322_191903_seed_deposits_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertFakeMembers();

    }

    private function insertFakeMembers() 
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $this->insert(
                'users_deposit',
                [
                    'amount' => $faker->randomNumber,
                    'reason' => $faker->sentence,
                ]
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m220322_191903_seed_deposits_table cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220322_191903_seed_deposits_table cannot be reverted.\n";

        return false;
    }
    */
}
