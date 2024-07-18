<?php
namespace itsmj\Upgradedatamodule\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Db\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // Create your table here
        $table = $setup->getConnection()->newTable(
        $setup->getTable(tableName: 'student33_db')
            // Replace with your desired table name
        )->addColumn(
                'id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'STUDENT ID'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'NAME OF STUDENT'
            )->addColumn(
                'address',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'ADDRESS OF STUDENT'
            )->addColumn(
                'created_at',
                Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
                'TIME STUDENT DATA CREATED'
            )->addColumn(
                'updated_at',
                Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
                'TIME STUDENT DATA UPDATED'
            )->setComment('STUDENT DATA Table');
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}