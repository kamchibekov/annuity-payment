<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m200624_105744_loans
 */
class m200624_105744_loans extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('loans', [
            'id' => Schema::TYPE_PK,
            'loanStartDate' => Schema::TYPE_DATE . ' NOT NULL',
            'loanAmount' => Schema::TYPE_INTEGER . ' NOT NULL',
            'loanTerm' => Schema::TYPE_INTEGER,
            'annualInterestRate' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
            'updated_at' => Schema::TYPE_DATETIME . ' NOT NULL'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('lons');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200624_105744_loans cannot be reverted.\n";

        return false;
    }
    */
}
