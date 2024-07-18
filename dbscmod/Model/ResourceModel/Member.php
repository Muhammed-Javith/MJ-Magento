<?php


namespace itsmj\dbscmod\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Member extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('bmember', 'bid');
    }
}