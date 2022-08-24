<?php

namespace AndreiaCardoso\MagentoPlugin\Plugin;

class PluginTypes
{
//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
//    {
//        return "Example Plugin Before | ".$name;
//    }
//
//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
//    {
//        return "Example Plugin After | ".$result ;
//    }

    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        echo "--- Before Proceed "."<br/>";
        $name = $proceed();
        echo $name."<br/>";
        echo "--- After Plugin "."<br/>" ;
        return $name;
    }


}
