<?php

namespace AndreiaCardoso\MagentoPlugin\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        Context $context

    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $product = $objectManager->create('Magento\Catalog\Model\Product')->load(2);
        $product->setName('Samsung Galaxy | '); //set $name plugin before
        $productName = $product->getName(); //get $result plugin after
        var_dump($productName);
    }
}
