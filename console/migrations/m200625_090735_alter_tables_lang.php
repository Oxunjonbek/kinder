<?php

use yii\db\Migration;

/**
 * Class m200625_090735_alter_tables_lang
 */
class m200625_090735_alter_tables_lang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("
            ALTER TABLE `ariza` ADD `lang` VARCHAR(200) NOT NULL AFTER `files`;
            ");
        $this->execute("
            ALTER TABLE `bm` ADD `lang` VARCHAR(200) NOT NULL AFTER `address`;
            ");
        $this->execute("
            ALTER TABLE `contact` ADD `lang` VARCHAR(200) NOT NULL AFTER `phone`;
            ");
        $this->execute("
            ALTER TABLE `elonlar` ADD `lang` VARCHAR(200) NOT NULL AFTER `pdf_name`;
            ");
        $this->execute("
            ALTER TABLE `farmonlar` ADD `lang` VARCHAR(200) NOT NULL AFTER `address`;
            ");
        $this->execute("
            ALTER TABLE `genel` ADD `lang` VARCHAR(200) NOT NULL AFTER `image`;
            ");
        $this->execute("
            ALTER TABLE `ichki` ADD `lang` VARCHAR(200) NOT NULL AFTER `file`;
            ");
        $this->execute("
            ALTER TABLE `interaktiv` ADD `lang` VARCHAR(200) NOT NULL AFTER `address`;
            ");
        $this->execute("
            ALTER TABLE `mtt` ADD `lang` VARCHAR(200) NOT NULL AFTER `address`;
            ");
        $this->execute("
            ALTER TABLE `news` ADD `lang` VARCHAR(200) NOT NULL AFTER `image`;
            ");
        $this->execute("
            ALTER TABLE `nizom` ADD `lang` VARCHAR(200) NOT NULL AFTER `image`;
            ");
        $this->execute("
            ALTER TABLE `pedagog` ADD `lang` VARCHAR(200) NOT NULL AFTER `prof`;
            ");
        $this->execute("
            ALTER TABLE `qabulhona` ADD `lang` VARCHAR(200) NOT NULL AFTER `name`;
            ");
        $this->execute("
            ALTER TABLE `qonunlar` ADD `lang` VARCHAR(200) NOT NULL AFTER `address`;
            ");
        $this->execute("
            ALTER TABLE `standart` ADD `lang` VARCHAR(200) NOT NULL AFTER `address`;
            ");
        $this->execute("
            ALTER TABLE `structure` ADD `lang` VARCHAR(200) NOT NULL AFTER `image`;
            ");
        $this->execute("
            ALTER TABLE `tadbir` ADD `lang` VARCHAR(200) NOT NULL AFTER `pdf_name`;
            ");
        $this->execute("
            ALTER TABLE `tanlov` ADD `lang` VARCHAR(200) NOT NULL AFTER `pdf_name`;
            ");
        $this->execute("
            ALTER TABLE `tarkibiy_structure` ADD `lang` VARCHAR(200) NOT NULL AFTER `image`;
            ");
        $this->execute("
            ALTER TABLE `vacansy` ADD `lang` VARCHAR(200) NOT NULL AFTER `salary`;
            ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("
            ALTER TABLE `ariza`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `bm`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `contact`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `elonlar`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `farmonlar`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `genel`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `ichki`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `interkativ`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `mtt`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `news`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `nizom`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `pedagog`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `qabulhona`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `qonunlar`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `standart`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `structure`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `tadbir`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `tanlov`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `tarkibiy_structure`
            DROP `lang`;
            ");
        $this->execute("
            ALTER TABLE `vacansy`
            DROP `lang`;
            ");
    }
}
