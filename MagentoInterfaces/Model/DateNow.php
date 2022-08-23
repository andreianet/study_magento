<?php

namespace AndreiaCardoso\MagentoInterfaces\Model;

use AndreiaCardoso\MagentoInterfaces\Api\DateNowInterface;
use Magento\Framework\Stdlib\DateTime\Timezone;


class DateNow implements DateNowInterface
{

    public function getDate()
    {
       return date('d/m/Y');
    }
}
