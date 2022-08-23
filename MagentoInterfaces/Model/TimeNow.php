<?php


namespace AndreiaCardoso\MagentoInterfaces\Model;

use AndreiaCardoso\MagentoInterfaces\Api\TimeNowInterface;
use Magento\Framework\Stdlib\DateTime\Timezone;


class TimeNow implements TimeNowInterface
{

    public function getTime()
    {
        return date('h:i:s');
    }
}
