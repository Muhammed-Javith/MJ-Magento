<?php

namespace itsmj\dbscmod\Model;

use itsmj\dbscmod\Model\ResourceModel\Member as MemberResourceModel;
use Magento\Framework\Model\AbstractModel;

class Member extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(MemberResourceModel::class);
    }
//     public function create(array $data = [])
//     {
//         // Example: Creating a member with name and salary
//        $this->setData($data['bid'], 'bid')
//             ->setData($data['bname'], 'bname')
//             ->setData($data['baddress'], 'baddress')
//             ->setData($data['bsalary'], 'bsalary')
//             ->save();

//         return $this;
//     }
}