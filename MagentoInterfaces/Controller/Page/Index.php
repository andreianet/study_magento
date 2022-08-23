<?php

namespace AndreiaCardoso\MagentoInterfaces\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use AndreiaCardoso\MagentoInterfaces\Api\DateNowInterface;
use AndreiaCardoso\MagentoInterfaces\Model\DateNow;
use AndreiaCardoso\MagentoInterfaces\Api\TimeNowInterface;
use AndreiaCardoso\MagentoInterfaces\Model\TimeNow;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $dateNow;
    protected $timeNow;

    public function __construct(
        Context $context,
        DateNowInterface $dateNow,
        TimeNowInterface $timeNow

    ) {
       parent::__construct($context);
       $this->dateNow = $dateNow;
       $this->timeNow = $timeNow;
    }

    public function execute()
    {
        echo "Today is {$this->dateNow->getDate()} and are  {$this->timeNow->getTime()} this is sunnyed!";
    }

}
