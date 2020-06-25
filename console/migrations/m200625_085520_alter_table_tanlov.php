<?php

use yii\db\Migration;

/**
 * Class m200625_085520_alter_table_tanlov
 */
class m200625_085520_alter_table_tanlov extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->execute("
        ALTER TABLE `tanlov` ADD `pdf_name` VARCHAR(255) NOT NULL AFTER `image`;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
        ALTER TABLE `tanlov`
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
        echo "m200625_085520_alter_table_tanlov cannot be reverted.\n";

        return false;
    }
    */
}
