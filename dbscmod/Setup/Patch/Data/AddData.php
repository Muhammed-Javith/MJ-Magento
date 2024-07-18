<?php

namespace itsmj\dbscmod\Setup\Patch\Data;

use itsmj\dbscmod\Model\MemberFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Module\Setup\Migration;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class AddData implements DataPatchInterface
{
     private $memberfactory;
     public function __construct(MemberFactory $memberfactory)
     {
          $this->memberfactory = $memberfactory;
     }
     public function apply()
     {
          echo "Applying data patch";
          // die;
          $sampledata =[
               [
                    'bid' => 1,
                    'bname' => 'Kavin',
                    'baddress' => '11 Main Street Dubai',
                    'bsalary' => 1500
               ],
               [
                    'bid' => 2,
                    'bname' => 'Nivin',
                    'baddress' => '12 Main Street Dubai',
                    'bsalary' => 2000
               ]
          ];
          foreach ($sampledata as $data) {
               $member = $this->memberfactory->create();
               $member->setData($data);
               $member->save();  
               // $member = $this->memberfactory->create($data); // Pass $data to create method
               // $member->save();
          }

     }
     public static function getDependencies()
     {
          return [];
     }

     public function getAliases()
     {
          return [];
     }

}