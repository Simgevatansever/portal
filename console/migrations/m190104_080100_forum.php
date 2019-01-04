<?php

use yii\db\Migration;

/**
 * Class m190104_080100_forum
 */
class m190104_080100_forum extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_080100_forum cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_080100_forum cannot be reverted.\n";

        return false;
    }
    */
}
