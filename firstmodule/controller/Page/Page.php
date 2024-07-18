<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace itsmj\firstmodule\Controller\Page;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Page extends \Magento\Framework\App\Action\Action 
{
    
    public function execute()
    {
        echo "Welcome HelloWorld";
    }
}
