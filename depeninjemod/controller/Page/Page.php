<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace itsmj\depeninjemod\Controller\Page;
use itsmj\depeninjemod\Magedi\PencilInterface;
use Magento\Framework\App\Action\Context;


class Page extends \Magento\Framework\App\Action\Action 
{
    protected $pencilinterface;
    public function __construct(Context $context, PencilInterface $pencilinterface)
    {
        $this->pencilinterface = $pencilinterface;
        parent::__construct($context);
    }
    
    public function execute()
    {
        echo $this->pencilinterface -> getPencilType();
    }
}
