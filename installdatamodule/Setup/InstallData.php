<?php
namespace itsmj\installdatamodule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Db\Ddl\Table;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        //insert data into  your table here
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Bob', 'address' => 'no 10,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Alex', 'address' => 'no 11,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Leo', 'address' => 'no 12,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Max', 'address' => 'no 13,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Mathew', 'address' => 'no 14,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Malan', 'address' => 'no 15,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student1_db'),
            ['name'=>'Rio', 'address' => 'no 16,dubai']
        );
        $setup -> getConnection()->insert(
            $setup->getTable(tableName:'student_db'),
            ['name'=>'Kio', 'address' => 'no 17,dubai']
        );

        $setup->endSetup();
    }
}