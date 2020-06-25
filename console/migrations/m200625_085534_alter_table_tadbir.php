<?php

use yii\db\Migration;

/**
 * Class m200625_085534_alter_table_tadbir
 */
class m200625_085534_alter_table_tadbir extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->execute("
        ALTER TABLE `tadbir` ADD `pdf_name` VARCHAR(255) NOT NULL AFTER `image`;
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
        ALTER TABLE `tadbir`
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
        echo "m200625_085534_alter_table_tadbir cannot be reverted.\n";

        return false;
    }
    */
}
