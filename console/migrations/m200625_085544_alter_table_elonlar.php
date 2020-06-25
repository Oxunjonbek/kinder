<?php

use yii\db\Migration;

/**
 * Class m200625_085544_alter_table_elonlar
 */
class m200625_085544_alter_table_elonlar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->execute("
        ALTER TABLE `elonlar` ADD `pdf_name` VARCHAR(255) NOT NULL AFTER `image`;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
        ALTER TABLE `elonlar`
  DROP `pdf_name`;
        ");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200625_085544_alter_table_elonlar cannot be reverted.\n";

        return false;
    }
    */
}
