<?php
namespace itsmj\upgradeschemamodule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Db\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(version_compare($context->getVersion(), '0.0.2', '<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('student32_db'),
                'phone_number',
                ['nullable' => false, 'type' => Table::TYPE_TEXT, 'comment' => 'PHONE NUMBER OF MEMBER']
            );
        }

        $setup->endSetup();
    }
}
