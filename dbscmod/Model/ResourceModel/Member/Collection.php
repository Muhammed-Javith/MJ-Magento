<?php

namespace itsmj\dbscmod\Model\ResourceModel\Member;

//use itsmj\dbscmod\Model\Member as MemberModel;
use itsmj\dbscmod\Model\ResourceModel\Member as MemberResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            MemberResourceModel::class, 
           'use itsmj\dbscmod\Model\Member'
        );
    }
}
