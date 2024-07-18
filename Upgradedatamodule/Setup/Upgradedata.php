<?php
namespace itsmj\upgradeschemamodule\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if(version_compare($context->getVersion(), '1.1.2', '<')){
            $setup->getConnection()->insert(
                $setup->getTable(tableName:'student33_db'),
                ['name'=>'ader', 'address' => 'no 122,dubai']
            );
        }

        $setup->endSetup();
    }
}
